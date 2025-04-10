<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <h1><strong>AGENDA TU CITA</strong></h1>
                    <p>Selecciona el servicio y la fecha que mejor se adapte a ti.</p>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="Servicios">Servicios</a></li>
                        <li class="breadcrumb-item"><a href="contact">Contactanos</a></li>
                        <li class="breadcrumb-item active">Reservaciones</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario de Citas -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h3 class="card-title">Reserva tu Cita</h3>
                        </div>
                        <div class="card-body">
                            <form action="procesar_cita.php" method="POST">
                                <!-- Nombre -->
                                <div class="form-group">
                                    <label for="nombre">Nombre Completo:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>

                                <!-- Teléfono -->
                                <div class="form-group">
                                 <label for="telefono">Teléfono:</label>
                                 <input type="tel" class="form-control" id="telefono" name="telefono" 
                                    pattern="[0-9]{10}" placeholder="Ejemplo: (***)-***-****" required>
                                </div>

                                <!-- Tipo de Servicio -->
                                <div class="form-group">
                                    <label for="servicio">Selecciona el Servicio:</label>
                                    <select class="form-control" id="servicio" name="servicio" required>
                                        <option value="Psicología">Psicología</option>
                                        <option value="Fisioterapia">Fisioterapia</option>
                                    </select>
                                </div>

                                <!-- Fecha -->
                                <div class="form-group">
                                    <label for="fecha">Selecciona la Fecha:</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                                </div>

                                <!-- Hora -->
                                <div class="form-group">
    <label for="hora">Selecciona la Hora:</label>
    <select class="form-control" id="hora" name="hora" required>
        <option value="09:00">9:00 AM</option>
        <option value="10:00">10:00 AM</option>
        <option value="11:00">11:00 AM</option>
        <option value="12:00">12:00 PM</option>
        <option value="13:00">1:00 PM</option>
        <option value="14:00">2:00 PM</option>
        <option value="15:00">3:00 PM</option>
        <option value="16:00">4:00 PM</option>
    </select>
</div>

                                <!-- Mensaje Opcional -->
                                <div class="form-group">
                                    <label for="mensaje">Mensaje (Opcional):</label>
                                    <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
                                </div>

                                <!-- Botón de Enviar -->
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-calendar-check"></i> Agendar Cita
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
