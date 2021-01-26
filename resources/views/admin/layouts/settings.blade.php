<aside class="control-sidebar control-sidebar-dark">
    
    <div class="control-panel">
      
      <div class="item">
        <div class="item-header d-flex items-center">
          <input type="checkbox" id="chk_button_1" data-id="button_1_content" {!! $sessions->BUTTON_1 == 1 ? 'checked' : '' !!} />
          <label for="chk_button_1" class="m-0">
            <h4 >
              Button 1 : 
            </h4>
          </label>
        </div>
        <div class="item-content" id="button_1_content">
          <input type="text" id="txt_button1_name"
                value="{!! $sessions->BUTTON_1_NAME !!}"
                placeholder="Button Name"
                class="form-control mb-4" />
          <input type="text" id="txt_button1_url"
                value="{!! $sessions->BUTTON_1_URL !!}"
                placeholder="URL"
                class="form-control" />
        </div>
      </div>  
      <div class="item">
        <h4>Theme Color : </h4>
        <input type="text" id="theme_color"
              value="{!! $sessions->BTN_BACKGROUND_COLOR !!}"
              class="form-control jscolor" />
      </div>    
      
    </div>
</aside>