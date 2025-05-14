const express = require("express");

const router = express.Router();
const { NITDB } = require("../config/db");
const nodemailer = require("nodemailer");
const nitDB = NITDB();

router.post("/register", async (req, res) => {
  // inserted = await nitDB.collection("student").insertOne();
  console.log("inserted-->", inserted);

  if (inserted?.acknowledged) {
    return res.json({
      status: "success",
      msg: "data stored success fully..",
      code: 200,
    });
  } else {
    return res.json({
      status: "error",
      msg: "Internal Server Error..!!",
      code: 200,
    });
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

module.exports = router;
