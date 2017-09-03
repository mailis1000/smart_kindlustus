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
        '#policyPostCode'],
    policyCountryFields = ['#policyState'];

$('form select, form input').on('change', function () {
    var $this = $(this),
        isValueTrue = function (value, id) {
            return $this.val() === value && $this.attr('id') === id;
        },
        isIdMatching = function (id) {
           return  $this.attr('id') === id;
        };
    /* isValueTrue('value', 'id') */
    if (isValueTrue('1', 'clientType')) {
        isFieldsVisible(companyFields, false);
        isFieldsVisible(personalFields, true);
    } else if (isValueTrue('2', 'clientType')) {
        isFieldsVisible(personalFields, false);
        isFieldsVisible(companyFields, true);
    }
    if (isValueTrue('1', 'country') && isIdMatching('country') ) {
        isFieldsVisible(contactCountryFields, false);
    } else if (!isValueTrue('1', 'country') && isIdMatching('country') ) {
        isFieldsVisible(contactCountryFields, true);
    }
    if ($this.is(":checked") && isIdMatching('policyAddress') ) {
        isFieldsVisible(policyAddressFields, true);
    } else if (!$this.is(":checked") && isIdMatching('policyAddress') ) {
        isFieldsVisible(policyAddressFields, false);
    }
    if (isValueTrue('1', 'policyCountry') && isIdMatching('policyCountry') ) {
        isFieldsVisible(policyCountryFields, false);
    } else if (!isValueTrue('1', 'policyCountry') && $this.is(":checked") && isIdMatching('policyAddress')
        || !isValueTrue('1', 'policyCountry') && isIdMatching('policyCountry') ) {
        isFieldsVisible(policyCountryFields, true);
    }
});