<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Servicios</strong></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="reservacion">Reservacion</a></li>
                        <li class="breadcrumb-item"><a href="contact">Contactanos</a></li>
                        <li class="breadcrumb-item active">Servicios</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="services-grid">
                <div class="service-item">
                    <i class="fas fa-brain"></i>
                    <h3>Terapias psicologicas</h3>
                    <p>Terapia individual, de pareja y familiar, manejo del estrés, ansiedad y depresión.</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-user-md"></i>
                    <h3>Evaluaciones Psicológicas</h3>
                    <p>Aplicación de test psicológicos para evaluar inteligencia, personalidad y habilidades cognitivas.</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-dumbbell"></i>
                    <h3>Fisioterapia</h3>
                    <p>Rehabilitación física, terapia manual y recuperación muscular y articular.</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-spa"></i>
                    <h3>Terapias Alternativas</h3>
                    <p>Masajes terapéuticos, electroterapia y crioterapia para el alivio del dolor.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 20px;
    }
    .service-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        background:rgb(255, 255, 255);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(76, 70, 238, 0.29);
    }
    .service-item i {
        font-size: 40px;
        color: #007bff;
        margin-bottom: 10px;
    }
</style>
