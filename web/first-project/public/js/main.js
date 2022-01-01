document.addEventListener("DOMContentLoaded", function(){
    document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
      
      element.addEventListener('click', function (e) {
  
        let nextEl = element.nextElementSibling;
        let parentEl  = element.parentElement;	
  
          if(nextEl) {
              e.preventDefault();	
              let mycollapse = new bootstrap.Collapse(nextEl);
              
              if(nextEl.classList.contains('show')){
                mycollapse.hide();
              } else {
                  mycollapse.show();
                  // find other submenus with class=show
                  var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                  // if it exists, then close all of them
                  if(opened_submenu){
                    new bootstrap.Collapse(opened_submenu);
                  }
              }
          }
      }); // addEventListener
    }) // forEach
  }); 
  // DOMContentLoaded  end

tinymce.init({
  selector: '#myTextarea',
  width: "100%",
  height: 500,
  plugins: [
  'advlist autolink linke lists charmap preview hr anchor',
  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime nonbreaking',
  'table emoticons paste help'
  ],
  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
  'bullist numlist outdent indent | linke | preview fullscreen | ' +
  'forecolor backcolor emoticons | help',
  menu: {
  favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
  },
  menubar: 'favs file edit view insert format tools table help',
  fontsize_formats: "8pt 9pt 10pt 11pt 12pt 14pt 18pt 24pt 30pt 36pt",
  content_css: 'css/content.css'
});