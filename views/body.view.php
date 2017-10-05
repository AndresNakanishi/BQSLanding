<body>
  <section class="BQSHero" id="Home">
    <div class="BQS-container">
      <header class="BQSHero-header">
        <figure class="BQSHero-logo">
          <img src="img/logo.png" alt="Las Brusquitas Miramar">
        </figure>
      </header>
      <section class="BQSHero-section">
        <article class="BQSHero-article">
          <h1 class="BQSHero-article-title">
            <p class="BQSHero-article-title-big">Naturaleza</p>
            <div class="BQSHero-article-title-container">
              <p class="BQSHero-article-title-small">para vivir en</p>
              <p class="BQSHero-article-title-big">&nbsp;familia</p>
            </div>
          </h1>
          <p class="BQSHero-article-copy">
            Entre Mar del Plata y Miramar, emplazado en 25 hect&aacute;reas de m&eacute;danos, amplias playas y mar seguro para los ni&ntilde;os, encontr&aacute;s este hist&oacute;rico Balneario ideal para vacacionar en familia.
          </p>
        </article>
        <div class="BQSHero-form-container">
          <h4 class="BQSHero-form-title">
            <p class="BQSHero-form-title-first">Env&iacute;anos tu consulta</p>
            <p class="BQSHero-form-title-second">y te llamamos a la brevedad.</p>
          </h4>
          <form class="BQSHero-form" id="BQSForm" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <input required class="BQSHero-form-inputs" type="text" id="name" name="name" placeholder="Nombre">
            <input required class="BQSHero-form-inputs" type="text" id="surname" name="surname" placeholder="Apellido">
            <input required class="BQSHero-form-inputs" type="text" id="cellphone" name="cellphone" placeholder="Celular">
            <textarea required class="BQSHero-form-message" rows="3" placeholder="Consulta" id="message" name="message"></textarea>
            <input class="BQSHero-form-btn" onclick="Sended();" id="submit" name="submit" type="submit" value="Enviar">
          </form>
        </div>
      </section>
    </div>  
  </section>
  <section class="BQSServices" id="Servicios">
    <div class="BQSServices-container">
      <div class="BQSServices-items">
        <h3 class="BQSServices-title">
          Servicios
        </h3>
        <ul class="BQSServices-list">
          <li class="BQSServices-item">&bullet; Estacionamiento para 250 autos.</li>
          <li class="BQSServices-item">&bullet; Escuela de <strong>Surf</strong>.</li>
          <li class="BQSServices-item">&bullet; Carpas y sombrillas.</li>
          <li class="BQSServices-item">&bullet; Clases de Yoga</li>
          <li class="BQSServices-item">&bullet; Gastronom&iacute;a saludable.</li>
          <li class="BQSServices-item">&bullet; Actividades de recreaci&oacute;n.</li>
          <li class="BQSServices-item">&bullet; Piscina con clases de nataci&oacute;n para ni&ntilde;os.</li>
          <li class="BQSServices-item">&bullet; Internet y CoWorking.</li>
        </ul>
      </div>
      <div class="BQSServices-ad">
        <div class="BQSServices-ad-container">
          <div class="BQSServices-ad-first">
            <p class="BQSServices-ad-first-one">Aprovech&aacute;</p>
            <p class="BQSServices-ad-first-two">nuestras</p> 
            <p class="BQSServices-ad-first-three">PROMOCIONES HOY,</p>
          </div>
          <div class="BQSServices-ad-second">
            llamanos al +54 9 11 57963159 y empez&aacute; a vivir el verano desde ahora.
          </div>
        </div>
      </div>
    </div>
    <div class="BQSServices-container">
      <section class="BQSServices-pricing">
        <h2 class="BQSServices-pricing-title">
          <p class="BQSServices-pricing-title-bold">Preventa Exclusiva!</p>
          <p class="BQSServices-pricing-title-regular">Hasta el 15 de Noviembre.</p>
        </h2>
        <div class="BQSServices-prices-container">
          <div class="BQSServices-prices">
            <div class="BQSServices-prices-copy">
              <p class="BQSServices-prices-titles">
                Temporada
              </p>
              <p class="BQSServices-prices-small">
                (desde el 1&deg; de Diciembre a Semana Santa)
              </p>
              <ul class="BQSServices-prices-list">
                <li class="BQSServices-prices-items">Estacionamiento</li>
                <li class="BQSServices-prices-items">Carpa para 6 personas</li>
                <li class="BQSServices-prices-items">Uso del sal&oacute;n</li>
              </ul>
            </div>
            <div class="BQSServices-another">
              <div class="BQSServices-prices-price-container">
                <p class="BQSServices-prices-price"><?php echo $temporada; ?></p>
              </div>
              <div class="BQSServices-prices-cta-container">
                <p class="BQSServices-prices-cta"><a class="BQSServices-prices-cta-link" href="#Home">Consultar</a></p>
              </div>
            </div>
          </div>
          <div class="BQSServices-prices">
            <div class="BQSServices-prices-copy">
              <p class="BQSServices-prices-titles">
                Enero
              </p>
              <p class="BQSServices-prices-small">
                (Contratando durante la preventa se incluye el per&iacute;odo del 23 al 31 de Diciembre)
              </p>
              <ul class="BQSServices-prices-list">
                <li class="BQSServices-prices-items">Estacionamiento</li>
                <li class="BQSServices-prices-items">Carpa para 6 personas</li>
                <li class="BQSServices-prices-items">Uso del sal&oacute;n</li>
              </ul>
            </div>
            <div class="BQSServices-another">
              <div class="BQSServices-prices-price-container">
                <p class="BQSServices-prices-price"><?php echo $enero; ?></p>
              </div>
              <div class="BQSServices-prices-cta-container">
                <p class="BQSServices-prices-cta"><a class="BQSServices-prices-cta-link" href="#Home">Consultar</a></p>
              </div>
            </div>
          </div>
          <div class="BQSServices-prices">
            <div class="BQSServices-prices-copy">
              <p class="BQSServices-prices-titles">
                Febrero
              </p>
              <ul class="BQSServices-prices-list">
                <li class="BQSServices-prices-items">Estacionamiento</li>
                <li class="BQSServices-prices-items">Carpa para 6 personas</li>
                <li class="BQSServices-prices-items">Uso del sal&oacute;n</li>
              </ul>
            </div>
            <div class="BQSServices-another">
              <div class="BQSServices-prices-price-container">
                <p class="BQSServices-prices-price"><?php echo $febrero; ?></p>
              </div>
              <div class="BQSServices-prices-cta-container">
                <p class="BQSServices-prices-cta"><a class="BQSServices-prices-cta-link" href="#Home">Consultar</a></p>
              </div>
            </div>
          </div>
          <div class="BQSServices-prices">
            <div class="BQSServices-prices-copy">
              <p class="BQSServices-prices-titles">
                Fines de Semana Temporada
              </p>
              <p class="BQSServices-prices-small">
                (Fines de semana entre el 1&deg; de Diciembre y Semana Santa)
              </p>
              <ul class="BQSServices-prices-list">
                <li class="BQSServices-prices-items">Estacionamiento</li>
                <li class="BQSServices-prices-items">Carpa para 6 personas</li>
                <li class="BQSServices-prices-items">Uso del sal&oacute;n</li>
              </ul>
            </div>
            <div class="BQSServices-another">
              <div class="BQSServices-prices-price-container">
                <p class="BQSServices-prices-price"><?php echo $weekends; ?></p>
              </div>
              <div class="BQSServices-prices-cta-container">
                <p class="BQSServices-prices-cta"><a class="BQSServices-prices-cta-link" href="#Home">Consultar</a></p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>
  <section class="BQSExperiences" id="Experiencias">
    <div class="BQSExperiences-container">
      <div class="BQS-container">
        <div class="BQSExperiences-items">
          <h3 class="BQSExperiences-title">
            Experiencias de nuestros visitantes
          </h3>
        </div>
      </div>
    </div>
    <div class="BQSExperiences-reviews">
      <div class="BQS-container">
        <div class="BQSExperiences-reviews-container">
          <a class="BQSExperiences-reviews-link" href="https://www.facebook.com/santiagolb/posts/10158526880500503:0" target="_blank"><img class="BQSExperiences-reviews-review" src="img/review05.png" title="La experiencia de Santi L&oacute;pez Belsue" alt="La experiencia de Santi L&oacute;pez Belsue"></a>
          <a class="BQSExperiences-reviews-link" href="https://www.facebook.com/gmarek07/posts/10155510680378273:1" target="_blank"><img class="BQSExperiences-reviews-review" src="img/review03.png" title="La experiencia de Gustavo Marek" alt="La experiencia de Gustavo Marek"></a>
          <a class="BQSExperiences-reviews-link" href="https://www.facebook.com/eesnaider/posts/10212658674043109:1" target="_blank"><img class="BQSExperiences-reviews-review" src="img/review02.png" title="La experiencia de Ezequiel M. Esnaider" alt="La experiencia de Ezequiel M. Esnaider"></a>
        </div>
        <div class="BQSExperiences-reviews-container">
          <a class="BQSExperiences-reviews-link" href="https://www.facebook.com/matiasecalvo/posts/10212340045485114:0" target="_blank"><img class="BQSExperiences-reviews-review" src="img/review06.png" title="La experiencia de Matias Calvo" alt="La experiencia de Matias Calvo"></a>
          <a class="BQSExperiences-reviews-link" href="https://www.facebook.com/permalink.php?story_fbid=10155204391216407&id=562281406&substory_index=0" target="_blank"><img class="BQSExperiences-reviews-review" src="img/review01.png" title="La experiencia de Adriana Catalina Chacon Trivi&ntilde;o" alt="La experiencia de Adriana Catalina Chacon Trivi&ntilde;o"></a>
          <a class="BQSExperiences-reviews-link" href="https://www.facebook.com/agustina.cerro/posts/10213435434859709:0" target="_blank"><img class="BQSExperiences-reviews-review" src="img/review04.png" title="La experiencia de Agustina Cerro" alt="La experiencia de Agustina Cerro"></a>
        </div>
      </div>
    </div>
  </section>
  <section class="BQSOverlay" id="BQSOverlay">
    <div class="BQSOverlay-modal" id="BQSModal">
      <div class="BQSOverlay-modal-header">
        <div class="BQSOverlay-container">
          <img src="img/logo.png" alt="Las Brusquitas Miramar">
          <button class="BQSOverlay-modal-btn" id="hide-modal"><i class="icon-close"></i></button>
        </div>
      </div>
      <div class="BQSOverlay-modal-body">
        <div class="BQSOverlay-container">
          <p class="BQSOverlay-modal-title">
            Gracias por tu consulta
          </p>
        </div>
      </div>
      <div class="BQSOverlay-modal-footer">
        <div class="BQSOverlay-container">
          <p class="BQSOverlay-modal-subtitle">
            Nos contactaremos a la brevedad
          </p>
          <div class="BQSOverlay-subcontainer">
            <p class="BQSOverlay-info"><img src="img/email.png" alt="Icono para representar un correo"> lasbrusquitasok@gmail.com</p>
            <p class="BQSOverlay-info"><i class="BQS-icons icon-whatsapp"></i> <strong>WhatsApp</strong>: + 54 9 11 57963159</p>
            <p class="BQSOverlay-info"><i class="BQS-icons icon-phone"></i> 011 15 57963159</p>
            <p class="BQSOverlay-info"><a href="https://www.facebook.com/lasbrusquitasOK/" target="_blank"><i class="BQS-icons icon-facebook"></i></a><a href="https://www.instagram.com/lasbrusquitasOK/" target="_blank"><i class="BQS-icons icon-instagram"></i></a> /lasbrusquitasOK</p>
          </div>
        </div>
      </div>
    </div>
  </section>