@extends('layouts.esqueleton')

@section('main')
<!-- ── HERO ── -->
<section class="hero" id="inicio">
  <div class="hero-grid"></div>
  <div class="hero-ornament"></div>
  <div class="hero-inner">
    <div class="hero-badge">Entidad sin ánimo de lucro · Colombia</div>
    <h1>Acceso a la <em>justicia</em> para todos los colombianos</h1>
    <p>Facilitamos a nivel nacional el proceso de acceso a la justicia, promoviendo el bien común, la equidad y el
      respeto a los derechos fundamentales de cada persona.</p>
    <div class="hero-actions">
      <a href="#contacto" class="btn-primary">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
          <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
        </svg>
        Solicitar asesoría
      </a>
      <a href="#servicios" class="btn-secondary">
        Ver nuestros servicios
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M5 12h14M12 5l7 7-7 7" />
        </svg>
      </a>
    </div>
    <div class="hero-stats">
      <div class="stat-item">
        <div class="stat-number">100%</div>
        <div class="stat-label">Virtual y accesible</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">+15</div>
        <div class="stat-label">Tipos de servicios</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">Nacional</div>
        <div class="stat-label">Cobertura en Colombia</div>
      </div>
    </div>
  </div>
</section>

<!-- ── QUIÉNES SOMOS ── -->
<section id="quienes">
  <div class="section-inner">
    <div class="quienes-grid">
      <div class="quienes-visual">
        <div class="quienes-card">
          <div class="quienes-icon-big">⚖️</div>
          <h3>Justicia al alcance de todos</h3>
          <p>Somos una entidad sin ánimo de lucro comprometida con facilitar el acceso a la justicia a nivel nacional,
            ayudando a construir una sociedad más justa, cohesionada y equitativa.</p>
        </div>
        <div class="quienes-badge">✦ Desde 2021</div>
      </div>
      <div class="quienes-content">
        <div class="section-tag">Quiénes Somos</div>
        <h2 class="section-title">Comprometidos con tus derechos</h2>
        <p class="section-subtitle">Creemos que cada persona, sin importar su condición, merece conocer y ejercer sus
          derechos. Por eso trabajamos de forma virtual, cercana y efectiva.</p>
        <div class="values">
          <div class="value-item">
            <div class="value-dot"></div>
            <p class="value-text"><strong>Misión:</strong> Facilitar el acceso a la justicia a nivel nacional mediante
              asesoría jurídica accesible, transparente y de calidad.</p>
          </div>
          <div class="value-item">
            <div class="value-dot"></div>
            <p class="value-text"><strong>Modalidad 100% virtual:</strong> Todos los trámites se llevan a cabo de forma
              virtual para mayor comodidad y alcance geográfico.</p>
          </div>
          <div class="value-item">
            <div class="value-dot"></div>
            <p class="value-text"><strong>Compromiso social:</strong> Promovemos el bien común, la equidad y el respeto
              hacia los derechos fundamentales de los colombianos.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── SERVICIOS ── -->
<section id="servicios">
  <div class="section-inner">
    <div class="servicios-header">
      <div>
        <div class="section-tag">Nuestros Servicios</div>
        <h2 class="section-title">¿En qué podemos ayudarte?</h2>
      </div>
      <p class="section-subtitle" style="max-width: 360px; font-size: 0.95rem;">Ofrecemos orientación jurídica integral
        en diversas áreas del derecho colombiano.</p>
    </div>
    <div class="servicios-grid">
      <div class="service-card">
        <div class="service-icon">📋</div>
        <h3>Derechos de Petición</h3>
        <p>Redactamos y gestionamos derechos de petición ante entidades públicas, privadas, centrales de riesgo,
          servicios públicos, impuestos y más.</p>
        <a href="#contacto" class="service-link">
          Solicitar
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </a>
      </div>
      <div class="service-card">
        <div class="service-icon">🛡️</div>
        <h3>Tutelas</h3>
        <p>Protegemos tus derechos fundamentales: vida, salud, educación, pensión, libertad, buen nombre, habeas data,
          estabilidad laboral y muchos más.</p>
        <a href="#contacto" class="service-link">
          Solicitar
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </a>
      </div>
      <div class="service-card">
        <div class="service-icon">⚖️</div>
        <h3>Demandas</h3>
        <p>Acompañamos y representamos a nuestros clientes en procesos judiciales, desde la preparación hasta la
          presentación ante las autoridades competentes.</p>
        <a href="#contacto" class="service-link">
          Solicitar
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </a>
      </div>
      <div class="service-card">
        <div class="service-icon">🏢</div>
        <h3>Asesoría Jurídica Empresarial</h3>
        <p>Constitución de empresas, contratos mercantiles, protección de marcas, representación legal y asesoramiento
          normativo para su negocio.</p>
        <a href="#contacto" class="service-link">
          Solicitar
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </a>
      </div>
      <div class="service-card">
        <div class="service-icon">💬</div>
        <h3>Consultas Jurídicas</h3>
        <p>Orientación y respuestas concretas sobre temas legales específicos, desde dudas sencillas hasta situaciones
          complejas en cualquier área del derecho.</p>
        <a href="#contacto" class="service-link">
          Solicitar
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </a>
      </div>
      <div class="service-card">
        <div class="service-icon">📁</div>
        <h3>Actas de Debido Proceso</h3>
        <p>Elaboración y revisión de actas especiales de debido proceso para garantizar el cumplimiento de los
          procedimientos legales establecidos.</p>
        <a href="#contacto" class="service-link">
          Solicitar
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ── ÁMBITOS ── -->
<section id="ambitos">
  <div class="section-inner ambitos-inner">
    <div class="section-tag" style="color: var(--gold-light);">Áreas de Acción</div>
    <h2 class="section-title">Ámbitos de trabajo</h2>
    <p class="section-subtitle">Nuestra corporación actúa en múltiples frentes para ofrecer una atención integral.</p>
    <div class="ambitos-grid">
      <div class="ambito-card">
        <div class="ambito-header">
          <div class="ambito-icon">🎓</div>
          <h3>Ámbito Académico</h3>
        </div>
        <ul>
          <li>Asesoría en procesos disciplinarios educativos</li>
          <li>Derechos de petición ante instituciones educativas</li>
          <li>Tutelas por derecho a la educación</li>
          <li>Orientación en normativa educativa vigente</li>
          <li>Acompañamiento en conflictos académicos</li>
        </ul>
      </div>
      <div class="ambito-card">
        <div class="ambito-header">
          <div class="ambito-icon">📊</div>
          <h3>Ámbito Contable</h3>
        </div>
        <ul>
          <li>Asesoría jurídica sobre normativa tributaria</li>
          <li>Gestión de derechos de petición tributarios</li>
          <li>Peticiones por impuesto predial y tasas</li>
          <li>Solicitud de paz y salvo por pago de hipotecas</li>
          <li>Orientación en disputas contables con entidades</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ── CONTACTO ── -->
<section id="contacto">
  <div class="section-inner">
    <div class="contacto-grid">
      <div class="contacto-info">
        <div class="section-tag">Contáctenos</div>
        <h2 class="section-title">Estamos para ayudarte</h2>
        <p>Diligencie el formulario o comuníquese directamente con nosotros. Le responderemos a la brevedad posible.</p>
        <div class="contact-methods">
          <a href="https://wa.me/3225141594" target="_blank" class="contact-method">
            <div class="contact-method-icon icon-wa">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="#25D366">
                <path
                  d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                <path
                  d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.984-1.407A9.94 9.94 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18c-1.72 0-3.328-.463-4.714-1.268l-.338-.2-3.508.99.941-3.44-.22-.352A7.944 7.944 0 0 1 4 12c0-4.418 3.582-8 8-8s8 3.582 8 8-3.582 8-8 8z" />
              </svg>
            </div>
            <div class="contact-method-text">
              <div class="contact-method-label">WhatsApp</div>
              <div class="contact-method-value">322 514 1594</div>
            </div>
          </a>
          <a href="tel:3114252911" class="contact-method">
            <div class="contact-method-icon icon-phone">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#1e3d70" stroke-width="2">
                <path
                  d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.91a16 16 0 0 0 6.08 6.08l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7a2 2 0 0 1 1.72 2.09z" />
              </svg>
            </div>
            <div class="contact-method-text">
              <div class="contact-method-label">Celular</div>
              <div class="contact-method-value">311 425 2911</div>
            </div>
          </a>
          <a href="mailto:Corporacionrjd2021@gmail.com" class="contact-method">
            <div class="contact-method-icon icon-mail">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#C8973A" stroke-width="2">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                <polyline points="22,6 12,13 2,6" />
              </svg>
            </div>
            <div class="contact-method-text">
              <div class="contact-method-label">Correo electrónico</div>
              <div class="contact-method-value">Corporacionrjd2021@gmail.com</div>
            </div>
          </a>
        </div>
      </div>

      <form class="form-card" method="POST" action="{{ route('contact.store') }}" id="contact-form">
        @csrf
        <h3>Envíenos su consulta</h3>
        <p>Complete el formulario y nos comunicaremos con usted pronto.</p>
        <div class="form-row">
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" placeholder="Su nombre" value="{{ old('name') }}"/>
            @error('name')
              <div class="error-message">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="last_name">Apellido</label>
            <input type="text" name="last_name" id="last_name" placeholder="Su apellido" value="{{ old('last_name')}}"/>
            @error('last_name')
              <div class="error-message">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="tel" name="phone" id="phone" placeholder="3xx xxx xxxx" value="{{ old('phone') }}"/>
            @error('phone')
              <div class="error-message">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" id="email" placeholder="correo@ejemplo.com" value="{{ old('email') || '' }}"/>
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="service-type">Tipo de servicio</label>
          <select name="service_type" id="service-type">
            <option value="">Seleccione un servicio...</option>
            <option>Consulta jurídica</option>
            <option>Derecho de petición</option>
            <option>Tutela</option>
            <option>Demanda</option>
            <option>Asesoría empresarial</option>
            <option>Ámbito académico</option>
            <option>Ámbito contable</option>
            <option>Otro</option>
          </select>
          @error('service_type')
            <div class="error-message">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="message">Descripción del caso</label>
          <textarea name="message" id="message" placeholder="Cuéntenos brevemente su situación o consulta...">{{ old('message') || '' }}</textarea>
          @error('message')
            <div class="error-message">{{ $message }}</div>
          @enderror
        </div>
        <button class="form-submit" type="submit">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <line x1="22" y1="2" x2="11" y2="13" />
            <polygon points="22 2 15 22 11 13 2 9 22 2" />
          </svg>
          Enviar solicitud
        </button>
      </form>
    </div>
  </div>
</section>
@endsection