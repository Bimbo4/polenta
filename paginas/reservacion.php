 <div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Reservación</h2>
            <p class="lead main text-center">Reserva nuetros salones de eventos</p>
            <div class="row">
                <div class="col-md-6">
                    <form class="form form-table" method="post" name="">
                        <div class="form-group">
                            <h4>Rellena la siguiente tabla(todos los campos son requeridos)</h4>
                        </div>

                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="first_name1">Nombre(s)</label>
                            <input class="form-control hint" type="text" id="first_name1" name="first_name" placeholder="Nombre(s)" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="last_name1">Apellido(s)</label>
                            <input class="form-control hint" type="text" id="last_name1" name="last_name" placeholder="Apellido(s)" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="email1">email</label>
                            <input class="form-control hint" type="email" id="email1" name="email" placeholder="email@domain.com" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="phone1">phone</label>
                            <input class="form-control hint" type="text" id="phone1" name="phone" placeholder="Teléfono" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="reserv_date1">reservation date</label>
                            <input class="form-control datepicker hasDatepicker hint" type="date" id="reserv_date1" name="reserv_date" placeholder="Fecha de reservación" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="numb_guests1">number of guests</label>
                            <input class="form-control hint" type="number" id="numb_guests1" name="numb_guests" placeholder="Numero de invitados" required="">
                          </div>
                        </div>



                        <div class="row">

                          <div class="col-lg-6 col-md-6 form-group">
                            <div id="Hora1" class="input-group clockpicker" data-placement="right" data-align="top" data-autoclose="true">
    <input name="filtroHora1" id="horaR" type="text" class="form-control timepicker ui-timepicker-input hint" placeholder="Hora inicio"  >
    <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
</div>

<script type="text/javascript">
$('.clockpicker').clockpicker();
</script>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="dist/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript">
$('.clockpicker').clockpicker()
  .find('input').change(function(){
    console.log(this.value);
  });
var input = $('#single-input').clockpicker({
  placement: 'bottom',
  align: 'left',
  autoclose: true,
  'default': 'now'
});

</script>
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                                                        <div id="Hora2" class="input-group clockpicker" data-placement="right" data-align="top" data-autoclose="true">
    <input name="filtroHora1" id="horaR" type="text" class="form-control timepicker ui-timepicker-input hint" placeholder="Hora fin"  >
    <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
</div>
                          </div>
                        </div>
                          <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="reason1">Razon</label>
                            <input class="form-control hint" type="text" id="reason" name="email" placeholder="Asunto o temática" required="">
                          </div>         
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="email1">Salón</label>
                            <select class="form-control hint" name="grade">
                                  <option value=#>Elige un salón</option>
                                    <option value=1>Chico(10 pers.)</option>
                                    <option value=2>Mediano(15-20 pers.)</option>
                                    <option value=3>Grande(20-50 pers.)</option>
                                </select>    
                          </div>
                           </div>
                             <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <select class="form-control hint" name="grade">
                                  <option value=#>Elige un tipo de consumo</option>
                                    <option value=1>Buffet</option>
                                    <option value=2>Carta</option>
                                    <option value=3>Coffe break</option>
                                    <option value=3>Menu de tres tiempos</option>
                                </select>    
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <p>Las reservaciones se hacen con diez días de anticipación y en caso de cancelaciones se cobrará una penalización del cinco porciento por cada día cercano</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-danger btn-lg">Reservar!</button>
                          </div>
                        </div>
                      </form>
                </div><!-- col-md-6 -->
                <div class="col-md-5 col-md-offset-1">
                    
                    <h3><i class="fa fa-cutlery"></i>Buffet</h3>
                    <h4>-Desayuno</h4>
                    <p>Lunes a Viernes: 8:30 AM - 12:00 AM<br>Sat &amp; Sun: 8:00 AM - 9:00 AM</p>
                    <h4>-Comida</h4>
                    <p>Lunes a Viernes: 13:00 PM - 17:00 PM</p>

                    <h3><i class="fa fa-clock-o fa-fw"></i>Desayunos</h3>
                    <p>Lunes a Domingos: 8:00 AM - 12:00 AM<br>***Incluyen: Café o té &amp; Jugo o Fruta***</p>
                    
                

                    <h3><i class="fa fa-map-marker fa-fw"></i>Dirección</h3>
                    <p>Avenida Juárez Norte N. 81, Colonia Barrio de Custitla, Tizayuca, Hidalgo</p>

                    <h3><i class="fa fa-mobile fa-fw"></i>Contacto</h3>
                    <p>Email: <a href="mailto:polentarestaurantetizayuca@gmail.com">polentarestaurantetizayuca@gmail.com</a></p>
                    <p>Teléfono: 01 (779) 100 76 02</p>

                </div><!-- col-md-6 -->
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #reservation -->


