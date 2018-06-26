<?php
    include("header-master.php");
?>

<a class="btn btn-primary btn-rsvp" href="#" data-toggle="modal" data-target="#rsvp-modal">ASISTIRÉ</a>


<div id="rsvp-modal" class="modal modal-rsvp"  tabindex="-1" role="dialog" aria-labelledby="rsvpModalLabel" aria-hidden="true">
    <br/>
    <div class="container">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <img src="mm/imagen/inicial.jpg">
    </div>
<!--        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <form id="rsvp-form" class="rsvp-form form" method="post" action="#">     
                        <div id="form-messages" class="text-center"></div>                  
                        <div class="row text-left">   
                            <div class="name-group col-md-6 col-sm-6 col-xs-12 form-group">
                                <div class="form-group-inner">
                                    <label for="cname">Nombre</label>
                                    <input type="text" class="form-control" id="cname" name="name" placeholder="Tu nombre completo" minlength="2"  aria-required="true" required>
                                </div>
                            </div>                    
                            <div class="email-group col-md-6 col-sm-6 col-xs-12 form-group">
                                <div class="form-group-inner">
                                    <label for="cemail">Email</label>
                                    <input type="email" class="form-control" id="cemail" name="email" placeholder="Tu email" aria-required="true" required>
                                </div>
                            </div>
                            
                            <div class="events-group col-md-6 col-sm-6 col-xs-12 form-group">
                                <div class="form-group-inner">
                                    <label for="cevents">¿A cuáles eventos asistirá?</label>
                                    <select class="form-control" id="cevents" name="events" aria-required="true" required>                       
                                        <option value="" selected>Por favor seleccione</option> 
                                        <option value="Ceremony and Reception">Ceremonia y Recepción</option>
                                        <option value="Ceremony Only">Solo Ceremonia</option>
                                        <option value="Reception Only">Solo Recepción</option>
                                        <option value="Sorry, can't make either">Disculpa, no podré asistir a ninguno</option>
                                    </select>     
                                </div>       
                            </div>      
                            
                            <div class="guests-group col-md-6 col-sm-6 col-xs-12 form-group">
                                <div class="form-group-inner">
                                    <label for="cguests">¿Con cuántos invitados vendrá?</label>
                                    <select class="form-control" id="cguests" name="guests" aria-required="true" required>
                                        <option value="" selected>Por favor seleccione</option>
                                        <option value="No Guests">Sin Invitados</option>
                                        <option value="1 Guest">1 Invitado</option>
                                        <option value="2 Guests">2 Invitados</option>
                                        <option value="3 Guests">3 Invitados</option>
                                        <option value="4 Guests">4 Invitados</option>
                                        <option value="5 Guests">5 Invitados</option>
                                    </select>   
                                </div>    
                            </div>         
                            
                            <div class="guestinfo-group col-md-12 col-sm-12 col-xs-12 form-group" style="display:none">
                                <div class="form-group-inner">
                                    <label for="cguestinfo">Nombre de invitados</label>
                                    <textarea class="form-control" id="cguestinfo" name="guestinfo" placeholder="Por favor indique nombre completo de los invitados" required></textarea>
                                </div>
                            </div>                                                   
                            
                            <div class="message-group col-md-12 col-sm-12 col-xs-12 form-group">
                                <div class="form-group-inner">
                                    <label for="cmessage">Información adicional</label>
                                    <textarea class="form-control" id="cmessage" name="message" placeholder="Ej. Vegetariano &amp; solicitudes de dieta"></textarea>
                                </div>
                            </div>
                            
                             <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <button type="submit" class="btn btn-block btn-primary">Enviar</button>
                            </div>   
                            
                            <div class="additional-info col-md-12 col-sm-12 col-xs-12 text-center">
                                Si tienes dudas por favor comunícate con nosotros. Puedes enviarnos un email a <a href="#">amynickwedding@gmail.com</a> o llamarnos a 0133 123455
                            </div>
                                       
                        </div>
                    </form>
                </div>
            </div>
        </div>-->
    </div>

<?php
    include("footer-master.php");
?>