<?php
$meta = [];
$meta['title'] = 'Julie\'s Website Resume Page';
$meta['description'] = 'Resume of Julie Finch Developer';
$meta['keywords'] = 'html,javascript,css,scss,sass,php';

$content = <<<EOT
<h1> Resume </h1>
<main itemscope itemtype="http://schema.org/Person">
  <header>
    <h2 itemprop="name">Julie Finch</h2>
    <ul>
    <li><a target="_blank" href="https://designopod.com/" itemprop="url">Designopod.com</a> </li>
    <li><a target="_blank" href="https://github.com/juliefab" itemprop="sameAs">github.com/juliefab</a></li>
    </ul>
  </header>
  <section>
  <details open>
        <summary>
         Watel/Davis, Support Developer/Designer
          <time>May 2017 - August 2017</time>
        </summary>
        <p>
          Wordpress Developer, Graphic Designer and Social Media marketing.
       </p>
        <ul>
        <li>Collaborated with a group of four people, a Graphic Designer, two Web Developers, and a Social Media Intern.</li>
          <li>
            Designed banner images, wrote emails, monitored Facebook and Instagram feeds along with Development work/WordPress theme alterations for <a href="https://www.refresh2go.com/" target="_blank">Refresh2go.com</a>.
          </li>
          <li>
            Created WordPress sliders and documentation for <a href="https://www.af-chicago.org/" target="_blank">Alliance Française of Chicago</a>.
          </li>
          <li>
            Created Graphics for Web using Adobe Illustrator and Photoshop.
          </li>
        </ul>
      </details>
    </section>
    <section>
    <details open>
          <summary>
        Bestcase llc., Web Developer/Designer
          </summary>
          <p>
            Wordpress Developer and Web Asset Designer
         </p>
          <ul>
          <li>Collaborated with a group of five people, A Marketing Director, a Graphic Designer, two Marketing Specialists, and a Video/Training Specialist.</li>
            <li>
              Designed, developed and styled landing pages and forms for Pardot marketing automation platform.
            </li>
            <li>
              Developed landing pages using CSS, HTML5, Bootstrap and Jquery.
            </li>
            <li>
              Created and exported Graphics for Web using Adobe Illustrator and Photoshop.
            </li>
            <li>
              Served as Team Leader for 2017 complete redesign and migration to WordPress.
            </li>
          </ul>
        </details>
      </section>
  <section>
    <h3>Education</h3>
    <details>
      <summary>
        <span itemprop="alumniOf" itemscope itemtype="http://schema.org/EducationalOrganization">
          <link href="https://www.colum.edu/" itemprop="url">
          <span itemprop="name">Columbia College Chicago</span>,
        <time>Graduated with Bachelors Degree</time>
      </summary>
     <p>  Studies: Writing, Film, Video </p>
    </details>
    <details>
      <summary>
        <span itemprop="alumniOf" itemscope itemtype="http://schema.org/EducationalOrganization">
          <link href="https://www.sessions.edu/" itemprop="url">
          <span itemprop="name">Sessions College of Professional Design</span>,
        <time> Graduated with Associates Degree</time>
      </summary>
     <p>  Studies: Graphic Design, Web Design </p>
    </details>
  </section>
</main>
EOT;

require '../core/layout.php';
