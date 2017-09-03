var createJSON = function () {
    var customerData = {
        data: {
            clients: [],
            vehicle: []
        }
        },
        thisId = function (id, inputName) {
            if (inputName) {
                if ($(id).attr('id') === inputName) {
                    return true;
                } else if ($(id).attr('id') !== inputName) {
                    return false
                }
            } else {
                return $(id).attr('id');
            }
        },
        thisVal = function (val) {
            return $(val).val();
        },
        contactAddress = [
            "country",
            "state",
            "county",
            "city",
            "street",
            "postCode"
        ],
        policyAddress = [
            "policyCountry",
            "policyState",
            "policyCounty",
            "policyCity",
            "policyStreet",
            "policyPostCode"
        ],
        weight = [
            "curb",
            "dry"
        ],

        clientObj = {},
        vehicleObj = {},
        contactAddressObj = {},
        policyAddressObj = {},
        weightObj = {};

    $('#clients input, #clients select').each(function () {
        if ($.inArray(thisId(this), contactAddress) !== -1) {
            contactAddressObj[thisId(this)] = thisVal(this);
        } else if ($.inArray(thisId(this), policyAddress) !== -1) {
            if (thisVal(this)) {
                var replace = thisId(this).replace("policy", ""),
                    policyComplete = replace.charAt(0).toLowerCase() + replace.slice(1);
                policyAddressObj[policyComplete] = thisVal(this);
            } else {
                policyAddressObj = '';
            }
        } else if (thisId(this, 'personalCode') || thisId(this, 'companyCode')) {
            if (thisVal(this)) {
                clientObj['code'] = thisVal(this);
            }
        } else if (thisId(this, void 0) && thisVal(this)) {
            clientObj[thisId(this)] = thisVal(this);
        }
    });

    $('#vehicle input, #vehicle select').each(function () {
        if ($.inArray(thisId(this), weight) !== -1) {
            weightObj[thisId(this)] = thisVal(this);
        } else if (thisId(this, void 0)) {
            vehicleObj[thisId(this)] = thisVal(this);
        }
    });

    customerData.data.clients.push(clientObj);
    customerData.data.clients[0]['address'] = contactAddressObj;
    if (policyAddressObj !== '') {
        customerData.data.clients[0]['policyAddress'] = policyAddressObj;
    } else {
        customerData.data.clients[0]['policyAddress'] = contactAddressObj;
    }
    customerData.data.vehicle.push(vehicleObj);
    customerData.data.vehicle[0]['weight'] = weightObj;

    return customerData;
};