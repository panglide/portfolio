<div class="col-sm-3 col-sm-offset-1 blog-sidebar">

  <!--TO DO Write Query for Archives-->
  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
    @foreach ($archives as $month)
      <li>
          <a href="/?month={{ $month['month'] }}&year={{ $month['year'] }}">
              {{ $month['month'] . ' ' . $month['year'] }}
          </a>
      </li>
      @endforeach
    </ol>
  </div>

  <!--To Do add links to social media and GH-->
  <div class="sidebar-module">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="https://github.com/panglide" target="_blank"><img class="soc-media" src="/images/github.png" alt="Git Hub logo"></a></li>
      <li><a href="https://twitter.com/phillipglidewel" target="_blank"><img class="soc-media" src="/images/twitt.png" alt="Twitter logo"></a></li>
      <li><a href="https://www.linkedin.com/in/phillip-glidewell-bb9014a6?trk=hp-identity-photo" target="_blank"><img class="soc-media" src="/images/lin.png" alt="Linked In logo"></a></li>
    </ol>
  </div>
</div><!-- /.blog-sidebar -->
