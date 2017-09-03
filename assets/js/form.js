var isFieldsVisible = function (fieldId, hideOrShow) {
        $(fieldId).each(function (index, item) {
            if (hideOrShow) {
                $(item).closest('.input-field').removeClass('hiddendiv')
            } else {
                $(item).closest('.input-field').addClass('hiddendiv')
            }

        });
    },
    personalFields = [
        '#personalCode',
        '#firstName',
        '#lastName',
        '#personalEmail'],
    companyFields = [
        '#companyCode',
        '#name',
        '#companyEmail'],
    contactCountryFields = ['#state'],
    policyAddressFields = [
        '#policyCountry',
        '#policyState',
        '#policyCounty',
        '#policyCity',
        '#policyStreet',
        '#postCode'],
    policyCountryFields = ['#policyState'];

$('form select, form input').on('change', function () {
    var $this = $(this),
        isValueTrue = function (value, id) {
            if ($this.val() === value && $this.attr('id') === id) {
                return true
            }
        };
    /* isValueTrue('value', 'id') */
    if (isValueTrue('1', 'clientType')) {
        isFieldsVisible(companyFields, false);
        isFieldsVisible(personalFields, true);
    } else if (isValueTrue('2', 'clientType')) {
        isFieldsVisible(personalFields, false);
        isFieldsVisible(companyFields, true);
    }
    if (isValueTrue('1', 'country') && $this.attr('id') === 'country' ) {
        isFieldsVisible(contactCountryFields, false);
    } else if (!isValueTrue('1', 'country') && $this.attr('id') === 'country' ) {
        isFieldsVisible(contactCountryFields, true);
    }
    if ($this.is(":checked") && $this.attr('id') === 'policyAddress') {
        isFieldsVisible(policyAddressFields, true);
    } else if (!$this.is(":checked") && $this.attr('id') === 'policyAddress') {
        isFieldsVisible(policyAddressFields, false);
    }
    if (isValueTrue('1', 'policyCountry') && $this.attr('id') === 'policyCountry' ) {
        isFieldsVisible(policyCountryFields, false);
    } else if (!isValueTrue('1', 'policyCountry') && $this.is(":checked") && $this.attr('id') === 'policyAddress'
        || !isValueTrue('1', 'policyCountry') && $this.attr('id') === 'policyCountry' ) {
        isFieldsVisible(policyCountryFields, true);
    }
});