const express = require("express");

const router = express.Router();
const { NITDB } = require("../config/db.js");
const nodemailer = require("nodemailer");
const constents = require("../config/constents.js");

router.post("/register", async (req, res) => {
  const nitDB = NITDB();

  const data = req.body.data;
  console.log("data-->", data);

  let error = false;
  let msg = "";

  // Validation...
  console.log("constents-->", constents, typeof constents);

  console.log("length of address -->", typeof data.address);
  console.log(
    "name-->",
    data.name,
    "email-->",
    data.email,
    "phone-->",
    data.phone,
    "length-->",
    data.phone.toString().length,
    "type of ",
    typeof data.phone,
    "adrs-->",
    data.address,
    "gender-->",
    data.gender,
    "program-->",
    data.program
  );

  if (!constents.regexForName.test(data.name)) {
    error = true;
    msg = "Invalid Name..!!";
  } else {
    data.name = formatName(data.name);
  }
  if (isNaN(Number(data.phone)) || data.phone.toString().length != 10) {
    error = true;
    msg = "Invalid Phone No..!!";
  }
  if (!constents.emailRegex.test(data.email)) {
    error = true;
    msg = "Invalid E-mail address..!!";
  }
  // if (userOtp != orgOtp) {
  //   error = true;
  //   msg = "Invalid OTP..!!";
  // }
  if (data.address.length > 30) {
    error = true;
    msg = "Too Lengthy Address..!!";
  }
  if (data.gender != "M" && data.gender != "F") {
    error = true;
    msg = "Please Select a Gender..!!";
  }
  if (
    !data.name ||
    !data.email ||
    !data.phone ||
    !data.address ||
    !constents.SUBARR.includes(data.program)
  ) {
    error = true;
    msg = "Invalid or Empty Field Passed!!";
  }

  // Validation Completed.....

  if (error == true) {
    return res.json({
      status: "error",
      message: msg,
      code: 500,
    });
  }
  if (error == false) {
    inserted = await nitDB.collection("studentLead").insertOne(data);
    console.log("inserted-->", inserted);

    if (inserted?.acknowledged) {
      // mail to Registered student..
      const transporter = nodemailer.createTransport({
        service: "Gmail",
        auth: {
          user: "nitcgl.fullsuportportal@gmail.com",
          pass: "sift agct rfjo mgbm",
        },
      });

      const mailOptions = {
        from: "nitcgl.fullsuportportal@gmail.com",
        to: data.email,
        subject: `Welcome TO NIT ,${data.name}`,
        text: `Dear ${data.name},
                Thank you for registering with NIT College.
                Your registration has been successfully received. A counselor will contact you shortly to guide you through the next steps.
                If you have any questions in the meantime, feel free to reply to this email.
                Best regards,  
                NIT College Admissions Team
                `,
      };

      transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
          console.log("Error sending mail:", error);
        }
        console.log("Email sent:", info.response);
        if (info.response) {
          console.log("E-mail send successfully..!!");
        }
      });
      // Mail Done....

      return res.json({
        status: "success",
        message: "Registered successfully..",
        code: 200,
      });
    } else {
      return res.json({
        status: "error",
        message: "Internal Server Error..!!",
        code: 500,
      });
    }

    // status for lead --> 0 no call , 1 interested , 2 not interested , 3 enrolled in constent file

    // res.send("working fine...");
  }
});

router.post("/sendOTP", async (req, res) => {
  const data = req.body;

  console.log("data-->", data);

  const transporter = nodemailer.createTransport({
    service: "Gmail",
    auth: {
      user: "nitcgl.fullsuportportal@gmail.com",
      pass: "sift agct rfjo mgbm",
    },
  });

  const mailOptions = {
    from: "nitcgl.fullsuportportal@gmail.com",
    to: data.email,
    subject: `Your OTP Code is : ${data.otp}`,
    text: `Here is your OTP for E-mail Verification : ${data.otp}`,
  };

  transporter.sendMail(mailOptions, (error, info) => {
    if (error) {
      return console.log("Error sending mail:", error);
    }
    console.log("Email sent:", info.response);
    if (info.response) {
      return res.json({
        status: "success",
        message: "OTP Sent SuccessFully..",
        code: 200,
      });
    } else {
      return res.json({
        status: "error",
        message: "Server Bussy..!!",
        code: 200,
      });
    }
  });
});

function formatName(name) {
  return name
    .toLowerCase()
    .split(" ")
    .map((word) => word.charAt(0).toUpperCase() + word.slice(1))
    .join(" ");
}
module.exports = router;
