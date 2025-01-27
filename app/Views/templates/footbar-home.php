<button id="scrollToTopBtn" class="btn btn-primary">↑</button>

<style>
#scrollToTopBtn { position: fixed; bottom: 13px; right: 13px; display: none; background: linear-gradient(to bottom right, var(--color-1), var(--color-3), var(--color-1) ); color: white; border: none; border-radius: 50%; font-size: 20px; padding: 10px; cursor: pointer; z-index: 9999; width: 40px; height: 40px; justify-content: center; align-items: center; box-shadow: 0 0 5px rgba(0, 0, 0, 0.8); }
#scrollToTopBtn:hover { background-color:rgb(0, 21, 92); }
</style>
<script>
window.onscroll = function() {
    var button = document.getElementById("scrollToTopBtn");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        button.style.display = "flex";
    } else {
        button.style.display = "none";
    }
};

document.getElementById("scrollToTopBtn").onclick = function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};
</script>