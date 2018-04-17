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
    toolbar: 'styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table youtube giphy | code | customers',
    convert_urls: false,
    image_caption: true,
    image_title: true,
    setup: function(editor) {
      
      function toTimeHtml(date) {
        return "<div class='login'> <div class='login_inner'> <div class='login_inner__avatar'></div> <input id='username-customer' placeholder='Give yourself a username' type='text'> <input id='email-customer' placeholder='What is your email?' type='email'> <input id='phone-customer' placeholder='phone' type='text'> <input type='button' class='btn-customer' value='Sign up'> </div> <div class='login_inner__check'> <div class='login_inner__check--complete'> <i class='fa fa-check'></i> </div> </div></div><h2></h2></div>";
      }
      
      function insertDate() {
        var html = toTimeHtml(new Date());
        editor.insertContent(html);
      }
  
      editor.addButton('customers', {
        icon: 'insertdatetime',
        //image: 'http://p.yusukekamiyamane.com/icons/search/fugue/icons/application-form.png',
        tooltip: "Insert Current Date",
        onclick: insertDate
      });
    }
  });
  
  
});
