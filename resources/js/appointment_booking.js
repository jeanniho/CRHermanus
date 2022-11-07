const { default: axios } = require('axios');

const appointment_submit_button = document.getElementById("appointment_submit_button");

if (appointment_submit_button) {
    appointment_submit_button.addEventListener('click', function(e) {
        e.preventDefault();
        let service_interested_in = document.getElementById("service_interested_in");
        const appointment_date = document.getElementById("appointment_date");
        const appointment_name = document.getElementById("appointment_name");
        const appointment_email = document.getElementById("appointment_email");
        const appointment_phone_number = document.getElementById("appointment_phone_number");
        const appointment_description = document.getElementById("appointment_description");

        if (!appointment_date.value) {
            alert("Please choose a date");
        }
        service_interested_in = service_interested_in.selectedOptions;
        service_interested_in = Array.from(service_interested_in).map(({ value }) => value);

        if (service_interested_in.length <= 0) {
            service_interested_in = null;
        }

        const options = {
            method: 'post',
            url: "/appointment-booking",
            data: {
                service_interested_in: service_interested_in,
                appointment_name: appointment_name.value,
                appointment_email: appointment_email.value,
                appointment_phone_number: appointment_phone_number.value,
                appointment_description: appointment_description.value
            }
        };

        axios(options).then(res => {
            // console.log(res);
            alert('Appointment have been successfully booked :)');
            window.location.href = "/appointment-booking";
        }).catch(err => {
            console.log(err);
        });
    });
}