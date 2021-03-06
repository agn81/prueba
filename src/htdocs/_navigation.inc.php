<?php

  print navItem('/hazards/designmaps/index.php',
      'Seismic Design Maps &amp; Tools');

  print navGroup(navItem('hazards/designmaps/usdesign.php',
      'US Seismic Design Maps'),
    navItem('/designmaps/us/application.php', 'Use the Tool') .
    navItem('/designmaps/us/changelog.php', 'Recent Changes') .
    navItem('hazards/designmaps/usdesigndoc.php', 'Documentation &amp; help')
  );

  print navGroup(navItem('/hazards/designmaps/rtgm.php',
      'Risk-Targeted Ground Motion Calculator'),
    navItem('/designmaps/rtgm/', 'Use the Tool') .
    navItem('https://code.usgs.gov/ghsc/hazdev/earthquake-rtgm-calculator/-/wikis/Risk-Targeted-Ground-Motion-Calculator-Documentation',
			'Documentation &amp; Help')
  );

  print navGroup(navItem('/hazards/designmaps/wwdesign.php',
      'Worldwide Seismic Design Tool'),
    navItem('https://geohazards.usgs.gov/designmaps/ww/',
        'Use the Tool') .
    navItem('https://github.com/usgs/earthquake-wwdesign/wiki/Worldwide-Seismic-Design-Tool-Documentation',
        'Documentation &amp; Help')
  );
