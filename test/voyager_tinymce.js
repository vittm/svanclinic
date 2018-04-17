$(document).ready(function(){

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  tinymce.init({
    menubar: false,
    selector:'textarea.richTextBox',
    skin: 'voyager',
    min_height: 600,
    resize: 'vertical',
    plugins: 'link, image, code, youtube, giphy, table, textcolor, lists',
    extended_valid_elements : 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
    file_browser_callback: function(field_name, url, type, win) {
            if(type =='image'){
              $('#upload_file').trigger('click');
            }
        },
    toolbar: 'styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table youtube giphy | code | customer',
    convert_urls: false,
    image_caption: true,
    image_title: true,
    setup: function(editor) {
      
      function toTimeHtml(date) {
        return '<div class="panel panel-bordered panel-info"> <div class="panel-heading"> <h3 class="panel-title"><i class="icon wb-search"></i> SEO Content</h3> <div class="panel-actions"> <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a> </div> </div> <div class="panel-body"> <div class="form-group"> <label for="name">Meta Description</label> <textarea class="form-control" name="meta_description">ád</textarea> </div> <div class="form-group"> <label for="name">Meta Keywords</label> <textarea class="form-control" name="meta_keywords">dá</textarea> </div> <div class="form-group"> <label for="name">Seo Title</label> <input type="text" class="form-control" name="seo_title" placeholder="SEO Title" value=""> </div> </div> </div>';
      }
      
      function insertDate() {
        var html = toTimeHtml(new Date());
        editor.insertContent(html);
      }
  
      editor.addButton('customer', {
        icon: 'insertdatetime',
        image: 'http://p.yusukekamiyamane.com/icons/search/fugue/icons/application-form.png',
        tooltip: "Form điền thông tin",
        onclick: insertDate
      });
    }
  });

});
