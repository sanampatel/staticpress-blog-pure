</div>
<footer class="footer">
    <div class="pure-menu pure-menu-horizontal">
        <ul>
            <li class="pure-menu-item"><a href="http://purecss.io/" class="pure-menu-link">Facebook</a></li>
            <li class="pure-menu-item"><a href="http://twitter.com/yuilibrary/" class="pure-menu-link">Twitter</a></li>
            <li class="pure-menu-item"><a href="http://github.com/pure-css/pure/" class="pure-menu-link">GitHub</a></li>
        </ul>
    </div>
</footer>

{{-- Main.js --}}
<script src="{{ $page->mainUrl }}/asset/build/js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fuse.js/3.4.5/fuse.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>

{{-- Customize footer scripts --}}
@yield('footer-scripts')

{{-- Identity redirect --}}
<script>
if (window.netlifyIdentity) {
    window.netlifyIdentity.on('init', (user) => {
        if (!user) {
            window.netlifyIdentity.on('login', () => {
                document.location.href = '/admin/';
            });
        }
    });
}
</script>

{{-- Identity-widget --}}
<script src="https://identity.netlify.com/v1/netlify-identity-widget.js"></script>

@include('_custom.footer')

<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-23560239-19');

	/**
	*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
	*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
	
	var disqus_config = function () {
	this.page.url = getUrl();  // Replace PAGE_URL with your page's canonical URL variable
	this.page.identifier = getUrl(); // Replace PAGE_IDENTIFIER with your page's unique identifier variable
	};
	
	(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://static-press.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
	})();
</script>
</body>
</html>