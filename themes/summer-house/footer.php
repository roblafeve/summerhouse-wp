  <?php if(!is_front_page()): ?>
  </div>
  <?php endif; ?>
  <?php if(get_site_url() !== "http://summerhousefilms.com" && get_site_url() !== "http://dev.summerhousefilms.com") : ?>
    <script type='text/javascript' id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3001/browser-sync/browser-sync-client.2.7.6.js'><\/script>".replace("HOST", location.hostname));
    //]]></script>
  <?php endif; ?>
  </body>
</html>