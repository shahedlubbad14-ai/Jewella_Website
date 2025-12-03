// Simple interactions for JEWELLA landing page
document.addEventListener('DOMContentLoaded', function(){
    // smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(function(a){
        a.addEventListener('click', function(e){
            e.preventDefault();
            var target = document.querySelector(this.getAttribute('href'));
            if(target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
});
