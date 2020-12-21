// IndexComponent.vue

<template>
    <div class="container">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{ name: 'create' }" class="btn btn-primary">Add new article</router-link>
            </div>
        </div>
        <br/>

        <table class="table table-striped table-bordered table-hover no-footer">
            <thead>
            <tr class="text-center">
                <th class="text-center">ID</th>
                <th class="text-center">Title</th>
                <th class="text-center">Description</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody class="text-xs-center">
            <tr v-for="post in posts" :key="post.id">
                <td class="text-center">{{ post.id }}</td>
                <td class="text-center">{{ post.title }}</td>
                <td class="text-center">{{ post.body }}</td>
                <td class="text-center">
                    <router-link :to="{name: 'edit', params: { id: post.id }}" class="btn btn-primary">Edit
                    </router-link>
                    <button class="btn btn-danger" @click="deletePost(post.id)">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: []
            }
        },
        created() {
            let uri = 'http://127.0.0.1:8000/api/posts';
            this.axios.get(uri).then(response => {
                this.posts = response.data.data;
            });
        },
        methods: {
            deletePost(id) {
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure you want to delete this item ?',
                    type: 'warning',
                    focusConfirm: false,
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No',

                }).then((result) => {
                    if (result.value) {
                        let uri = `http://127.0.0.1:8000/api/post/delete/${id}`;
                        this.axios.delete(uri)
                            .then(response => {
                                let i = this.posts.map(item => item.id).indexOf(id); // find index of your object
                                console.log(i);
                                this.posts.splice(i, 1)
                            });
                    }
                })
            }
        }
    }
</script>