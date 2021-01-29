@extends('admin.layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Settings
    </h1>
    <br>
</section>
<section class="content">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-error" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <form action="{{ url('/update_session_files') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="form-group">
                <label for="live_url">Live URL</label>
                <input class="form-control" type="text" id="live_url" name="live_url" value="{{ $sessions->live_url }}">                
            </div>
            <input type="submit" class="btn btn-success" value="save">            
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="login_bg">Login page's Background</label>
                <input class="form-control" type="file" id="login_bg" name="login_bg" accept="image/*">                
            </div>
            <div class="mb-3">
                <img width="400" src="{{ asset($sessions->login_bg) }}" alt="">
            </div>
            <input type="submit" class="btn btn-success" value="save">            
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="login_logo">Login page's Logo</label>
                <input class="form-control" type="file" id="login_logo" name="login_logo" accept="image/*">                
            </div>
            <div class="mb-3">
                <img width="400" src="{{ asset($sessions->login_logo) }}" alt="">
            </div>
            <input type="submit" class="btn btn-success" value="save">            
        </div>        
        <div class="mb-3">
            <div class="form-group">
                <label for="home_bg">Home page's Background</label>
                <input class="form-control" type="file" id="home_bg" name="home_bg" accept="image/*">                
            </div>
            <div class="mb-3">
                <img width="400" src="{{ asset($sessions->home_bg) }}" alt="">
            </div>
            <input type="submit" class="btn btn-success" value="save">            
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="home_logo">Home page's Logo</label>
                <input class="form-control" type="file" id="home_logo" name="home_logo" accept="image/*">                
            </div>
            <div class="mb-3">
                <img width="400" src="{{ asset($sessions->home_logo) }}" alt="">
            </div>
            <input type="submit" class="btn btn-success" value="save">            
        </div>   
    </form>
</section>
@endsection

@push('script')
<script>

</script>
@endpush