<?php
/**
 * Created by PhpStorm.
 * User: mailis
 * Date: 03/09/17
 * Time: 12:15
 */
?>
<h3>Vehicle</h3>
<section>
    <div id="vehicle">
        <legend>Vehicle</legend>

        <!-- TODO: Render brands to options, when specific brand is selected, display this brand's models  -->

        <div class="row">
            <?php
            (new Select())
                ->setId('make')
                ->setRequired()
                ->setOptions($vehicleBrand, 'Brand of the vehicle')
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Select())
                ->setId('model')
                ->setRequired()
                ->setOptions($vehicleModel, 'Model of the vehicle')
                ->render();
            (new Input())
                ->setLabelText('VIN code')
                ->setId('vinCode')
                ->setRequired()
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Input())
                ->setLabelText('Year')
                ->setId('year')
                ->setRequired()
                ->render();
            (new Input())
                ->setLabelText('Power in kW')
                ->setId('power')
                ->setRequired()
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Select())
                ->setId('type')
                ->setRequired()
                ->setOptions($vehicleType, 'Vehicle type')
                ->render();
            (new Select())
                ->setId('usageType')
                ->setRequired()
                ->setOptions($vehicleUsage, 'Vehicle usage type')
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Select())
                ->setId('lease')
                ->setRequired()
                ->setOptions($vehicleLeaseStatus, 'Vehicle lease status')
                ->render();
            (new Input())
                ->setLabelText('Registration code')
                ->setId('registrationCode')
                ->setRequired()
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Input())
                ->setLabelText('Curb weight')
                ->setId('curb')
                ->setRequired()
                ->render();
            (new Input())
                ->setLabelText('Dry weight')
                ->setId('dry')
                ->setRequired()
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Input())
                ->setLabelText('Price of the vehicle')
                ->setId('price')
                ->setRequired()
                ->render();
            (new Input())
                ->setLabelText('Registration certificate number')
                ->setId('registrationCertificateNumber')
                ->setRequired()
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Input())
                ->setLabelText('Odometer display value')
                ->setId('odometerDisplay')
                ->setRequired()
                ->render();
            (new Input())
                ->setLabelText('Number of keys')
                ->setId('numberOfKeys')
                ->setRequired()
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Input())
                ->setLabelText('Number of alarm keys')
                ->setId('numberOfAlarmKeys')
                ->setRequired()
                ->render();
            (new Input())
                ->setLabelText('Number of doors')
                ->setId('numberOfDoors')
                ->setRequired()
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Input())
                ->setLabelText('Number of airbags')
                ->setId('numberOfAirbags')
                ->setRequired()
                ->render();
            (new Input())
                ->setLabelText('Number of seats')
                ->setId('numberOfSeats')
                ->setRequired()
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Select())
                ->setId('bodyType')
                ->setRequired()
                ->setOptions($vehicleBodyType, 'Vehicle body type')
                ->render();
            (new Select())
                ->setId('bodyType')
                ->setRequired()
                ->setOptions($vehicleFuelType, 'Vehicle fuel type')
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Input())
                ->setLabelText('Employee e-mail')
                ->setId('employee')
                ->setRequired()
                ->render();
            ?>
        </div>
    </div>
</section>