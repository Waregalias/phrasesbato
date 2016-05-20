$( document ).ready(function(){
     $(".button-collapse").sideNav();
     $('.parallax').parallax();
     $('select').material_select();
     $('.modal-trigger').leanModal();

     $('.addBtn').on('click', function(){
         scrollToSomewhere('add', 300);
     });

     $('.searchBtn').on('click', function(){
         scrollToSomewhere('search', 300);
     });

    function scrollToSomewhere(id, duration){
        var endroit = id;
        var long = duration;
        $('html, body').scrollTo('#'+endroit+'',{duration:long});
    }
})
