<?php
/**
 * Created by PhpStorm.
 * User: mailis
 * Date: 03/09/17
 * Time: 12:15
 */
?>
<h3>Personal info</h3>
<section>
    <div id="clients">
        <legend>Personal info</legend>
        <div class="row">
            <?php
            (new Select())
                ->setId('clientType')
                ->setRequired()
                ->setOptions($clientType, 'Client type')
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Input())
                ->setLabelText('First name')
                ->setId('firstName')
                ->hideField(true)
                ->setRequired()
                ->render();
            (new Input())
                ->setLabelText('Last name')
                ->setId('lastName')
                ->setRequired()
                ->hideField(true)
                ->render();
            (new Input())
                ->setLabelText('Company name')
                ->setId('name')
                ->setRequired()
                ->hideField(true)
                ->render();
            (new Input())
                ->setLabelText('Company code')
                ->setId('companyCode')
                ->setRequired()
                ->hideField(true)
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Input())
                ->setLabelText('Personal code')
                ->setId('personalCode')
                ->setRequired()
                ->hideField(true)
                ->render();
            (new Input())
                ->setLabelText('Personal e-mail')
                ->setId('personalEmail')
                ->setRequired()
                ->hideField(true)
                ->render();
            (new Input())
                ->setLabelText('Company e-mail')
                ->setId('companyEmail')
                ->setRequired()
                ->hideField(true)
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Select())
                ->setId('country')
                ->setRequired()
                ->setOptions($contactCountry, 'Country')
                ->render();
            (new Input())
                ->setLabelText('State')
                ->setId('state')
                ->setRequired()
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Input())
                ->setLabelText('County')
                ->setId('county')
                ->setRequired()
                ->render();
            (new Input())
                ->setLabelText('City')
                ->setId('city')
                ->setRequired()
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Input())
                ->setLabelText('Street')
                ->setId('street')
                ->setRequired()
                ->render();
            (new Input())
                ->setLabelText('Postal code')
                ->setId('postCode')
                ->setRequired()
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Select())
                ->setId('systemType')
                ->setRequired()
                ->setOptions($vehicleRelation, 'Relation to the vehicle')
                ->render();
            ?>
        </div>

        <!-- TODO: Create checkbox FieldBuilder -->

        <div class="row">
            <div class="col s6">
                <input type="checkbox" class="filled-in" id="policyAddress"/>
                <label for="policyAddress">Different policy address</label>
            </div>
        </div>
        <div class="row">
            <?php
            (new Select())
                ->setId('policyCountry')
                ->setRequired()
                ->setOptions($contactCountry, 'Country')
                ->hideField(true)
                ->render();
            (new Input())
                ->setLabelText('State')
                ->setId('policyState')
                ->setRequired()
                ->hideField(true)
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Input())
                ->setLabelText('County')
                ->setId('policyCounty')
                ->setRequired()
                ->hideField(true)
                ->render();
            (new Input())
                ->setLabelText('City')
                ->setId('policyCity')
                ->setRequired()
                ->hideField(true)
                ->render();
            ?>
        </div>
        <div class="row">
            <?php
            (new Input())
                ->setLabelText('Street')
                ->setId('policyStreet')
                ->setRequired()
                ->hideField(true)
                ->render();
            (new Input())
                ->setLabelText('Postal code')
                ->setId('policyPostCode')
                ->setRequired()
                ->hideField(true)
                ->render();
            ?>
        </div>
    </div>
</section>