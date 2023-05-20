# Mpesa-API-intergration
Integrating Lipa na Mpesa C-B API to PHP system.




STEP BY STEP INSTRUCTIONS

STEP 1: CREATE A SAFARICOM DARAJA ACCOUNT
To create an account in Safaricom Daraja, open the Safaricom Developer Portal: 
https://developer.safaricom.co.ke/
If you don't have an account, register otherwise login to your account.



STEP 2: CREATE A NEW APP IN SAFARICOM
After creating an account, login and create a new app, give it a name of your choice.
Take note of the CONSUMER KEY, CONSUMER SECRET, and Lipa na Mpesa pass key obtained through the app simulation created because we will use them late



STEP 3: SIMULATE YOUR APP TO OBTAIN LIPA NA MPESA
To simulate the app, click on APIS, which is on the menu bar and choose the simulation of the customer to business order.
You then need to select the app that we created and start simulating to obtain the passkeys and business shortcode.



STEP 4: CREATE YOUR PROJECT IN VS CODE
Create and design your form using html, css, js, and php. The form should inclide the sender's phone number and the amount input fields.
you can also use the code above as a guiding reference for designing and coding your form.



STEP 5: WRITE YOUR MPESA LOGIC
- Variable declaration
- Generating authentication token
- initiating the STK push on the user's phone



STEP 6: CONCLUSION AND EXPECTED RESULT
The expected result is:
        {"MarchantRequestID:"107787-32724147","CheckoutRequestID":"ws_CO_211220211829034967","RequestCode":"0","ResponseDescription":"Success Request accepted for processing","CustomerMessage":"Success.Request accepted for processing"}
                                Confirm Payment is complete