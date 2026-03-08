<!DOCTYPE html>
<html>
<head>
  <style>
    body { font-family: Arial, sans-serif; color: #1a1a2e; }
    .header { background: #0D1F3C; color: white; padding: 24px; border-radius: 8px 8px 0 0; }
    .body { background: #f5f0e8; padding: 24px; border-radius: 0 0 8px 8px; }
    .field { margin-bottom: 16px; }
    .label { font-size: 12px; font-weight: bold; color: #6b7280; text-transform: uppercase; }
    .value { font-size: 15px; color: #0D1F3C; margin-top: 4px; }
    .mensaje { background: white; padding: 16px; border-radius: 8px; border-left: 4px solid #C8973A; }
  </style>
</head>
<body>
  <div class="header">
    <h2 style="margin:0">📋 Nueva solicitud de contacto</h2>
    <p style="margin:8px 0 0; opacity:.7">Corporación Red de Justicia y del Derecho</p>
  </div>
  <div class="body">
    <div class="field">
      <div class="label">Nombre completo</div>
      <div class="value">{{ $datos['name'] }} {{ $datos['last_name'] }}</div>
    </div>
    <div class="field">
      <div class="label">Teléfono</div>
      <div class="value">{{ $datos['phone'] }}</div>
    </div>
    <div class="field">
      <div class="label">Correo electrónico</div>
      <div class="value">{{ $datos['email'] }}</div>
    </div>
    <div class="field">
      <div class="label">Tipo de servicio</div>
      <div class="value">{{ $datos['service_type'] }}</div>
    </div>
    <div class="field">
      <div class="label">Descripción del caso</div>
      <div class="mensaje">{{ $datos['message'] }}</div>
    </div>
  </div>
</body>
</html>