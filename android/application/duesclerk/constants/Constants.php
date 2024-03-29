<?php

/**
* Constants class
* This class contains all the constants required by all project files
*
* @author David Kariuki (dk)
* @copyright Copyright (c) 2020 - 2022 David Kariuki (dk) All Rights Reserved.
*/


// Namespace declaration
namespace duesclerk\constants;

// Enable error reporting
ini_set('display_errors', 1); // Enable displaying of errors
ini_set('display_startup_errors', 1); // Enable displaying of startup errors
ini_set('log_errors', 1); // Enabke error logging
error_reporting(E_ALL | E_NOTICE | E_STRICT); // eNable all error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Enable MYSQLI error reporting


// Website and domain details
define("PROTOCOL",                                  "https://");
define("SUB_DOMAIN",                                "www.");
define("ROOT_DOMAIN",                               "liniantt.com");
define("ROOT_DOMAIN_WITH_SUB_DOMAIN",               SUB_DOMAIN . ROOT_DOMAIN);
define("WEBSITE_URL",                               PROTOCOL . ROOT_DOMAIN_WITH_SUB_DOMAIN);
define("COMPANY_NAME",                              "DuesClerk");


// Table Names
define("TABLE_USERS",                               "Users");
define("TABLE_EMAIL_VERIFICATION",                  "EmailVerification");
define("TABLE_USER_LOGS",                           "UserLogs");
define("TABLE_COUNTRIES",                           "Countries");
define("TABLE_CONTACTS",                            "Contacts");
define("TABLE_DEBTS",                               "Debts");


/**
* Table users fields
*/
define("FIELD_USER_ID",                             "UserId");
define("FIELD_FULL_NAME_OR_BUSINESS_NAME",          "FullNameOrBusinessName");
define("FIELD_EMAIL_ADDRESS",                       "EmailAddress");
define("FIELD_COUNTRY_ID",                          "CountryId");
define("FIELD_COUNTRY_NAME",                        "CountryName");
define("FIELD_COUNTRY_CODE",                        "CountryCode");
define("FIELD_COUNTRY_ALPHA2",                      "CountryAlpha2");
define("FIELD_COUNTRY_ALPHA3",                      "CountryAlpha3");
define("FIELD_COUNTRY_FLAG",                        "CountryFlag");
define("FIELD_HASH",                                "Hash");
define("FIELD_ACCOUNT_TYPE",                        "AccountType");
define("FIELD_SIGN_UP_DATE_TIME",                   "SignUpDateTime");
define("FIELD_EMAIL_VERIFIED",                      "EmailVerified");
define("FIELD_UPDATE_DATE_TIME",                    "UpdateDateTime");
define("FIELD_PASSWORD",                            "Password");
define("FIELD_NEW_PASSWORD",                        "NewPassword");
define("FIELD_NEW_ACCOUNT_TYPE",                    "NewAccountType");

define("KEY_ACCOUNT_TYPE_FREE",                     "Free account");
define("KEY_USER",                                  "User");
define("KEY_UPDATE_PROFILE",                        "UpdateProfile");
define("KEY_SIGN_UP",                               "SignUp");
define("KEY_SIGN_IN",                               "SignIn");
define("KEY_PASSWORD_RESET",                        "PasswordReset");


/**
* Table email verification fields
*/
define("FIELD_VERIFICATION_ID",                     "VerificationId");
define("FIELD_VERIFICATION_CODE",                   "VerificationCode");
define("FIELD_VERIFICATION_TYPE",                   "VerificationType");
define("FIELD_VERIFICATION_CODE_REQUEST_TIME",      "VerificationCodeRequestTime");

define("KEY_VERIFICATION_TYPE_EMAIL_ACCOUNT",       "VerificationEmailAccount");
define("KEY_VERIFICATION_TYPE_PASSWORD_RESET",      "VerificationPasswordReset");
define("KEY_VERIFICATION_CODE_EXPIRY_TIME",         1); // 1 hour
define("KEY_EMAIL_VERIFICATION",                    "EmailVerification");
define("KEY_SEND_VERIFICATION_CODE",                "SendVerificationCode");


/**
* Table logs fields
*/
define("FIELD_USER_LOG_ID",                         "UserLogId");
define("FIELD_USER_LOG_TYPE",                       "UserLogType");
define("FIELD_USER_LOG_TIME",                       "UserLogTime");


/**
* Table contact fields and keys
*/
define("FIELD_CONTACT_ID",                          "ContactId");
define("FIELD_CONTACT_FULL_NAME",                   "ContactFullName");
define("FIELD_CONTACT_PHONE_NUMBER",                "ContactPhoneNumber");
define("FIELD_CONTACT_EMAIL_ADDRESS",               "ContactEmailAddress");
define("FIELD_CONTACT_ADDRESS",                     "ContactAddress");
define("FIELD_CONTACT_TYPE",                        "ContactType");
define("FIELD_CONTACT_ORDER",                       "ContactOrder");

define("KEY_UPDATE_CONTACT",                        "UpdateContact");
define("KEY_UPDATE_DEBT",                           "UpdateDebt");
define("KEY_CONTACT",                               "Contact");
define("KEY_CONTACTS_IDS",                          "ContactsIds");
define("KEY_CONTACTS",                              "Contacts");
define("KEY_CONTACT_DETAILS",                       "ContactDetails");
define("KEY_DELETE_CONTACTS",                       "DeleteContacts");
define("KEY_CONTACT_TYPE_PEOPLE_I_OWE",             "ContactTypePeopleIOwe");
define("KEY_CONTACT_TYPE_PEOPLE_OWING_ME",          "ContactTypePeopleOwingMe");


/**
* Table debts fields and keys
*/
define("FIELD_DEBT_ID",                             "DebtId");
define("FIELD_DEBT_AMOUNT",                         "DebtAmount");
define("FIELD_DEBT_DATE_ISSUED",                    "DebtDateIssued");
define("FIELD_DEBT_DATE_DUE",                       "DebtDateDue");
define("FIELD_DEBT_DESCRIPTION",                    "DebtDescription");
define("FIELD_DEBT_DATE_ADDED",                     "DebtDateAdded");

define("KEY_DEBTS_TOTAL_AMOUNT",                    "DebtsTotalAmount");
define("KEY_ALL_CONTACTS_DEBTS_TOTAL_AMOUNT",       "AllContactsDebtsTotalAmount");
define("KEY_CONTACTS_DEBTS_TOTAL_PEOPLE_OWING_ME",  "ContactsDebtsTotalPeopleOwingMe");
define("KEY_CONTACTS_DEBTS_TOTAL_PEOPLE_I_OWE",     "ContactsDebtsTotalPeopleIOwe");
define("KEY_DEBT",                                  "Debt");
define("KEY_DEBTS",                                 "Debts");
define("KEY_DEBTS_IDS",                             "DebtsIds");
define("KEY_DELETE_DEBTS",                          "DeleteDebts");
define("KEY_CONTACTS_NUMBER_OF_DEBTS",              "ContactsNumberOfDebts");


/**
* Table field lengths
*/
define("LENGTH_MIN_SINGLE_NAME",                    1);
define("LENGTH_MIN_PASSWORD",                       8);
define("LENGTH_MAX_EMAIL_ADDRESS",                  320);
define("LENGTH_TABLE_IDS_SHORT",                    25);
define("LENGTH_TABLE_IDS_LONG",                     50);
define("LENGTH_VERIFICATION_CODE",                  6);


// Country keys
define("KEY_COUNTRY",                               "Country");
define("KEY_COUNTRY_DATA",                          "CountryData");


// Error, error message and success message keys
define("KEY_ERROR",                                 "Error");
define("KEY_ERROR_MESSAGE",                         "ErrorMessage");
define("KEY_SUCCESS_MESSAGE",                       "SuccessMessage");


// Expressions (preg match)
define("EXPRESSION_NAMES",                          "/^[A-Za-z .'-]+$/");


// Logs keys
define("LOG_TYPE_SIGN_UP",                          "LogTypeSignUp");
define("LOG_TYPE_SIGN_IN",                          "LogTypeSignIn");
define("LOG_TYPE_SIGN_OUT",                         "LogTypeSignOut");
define("LOG_TYPE_UPDATE_PROFILE",                   "LogTypeUpdateProfile");
define("LOG_TYPE_UPDATE_PASSWORD",                  "LogTypeUpdatePassword");
define("LOG_TYPE_SWITCH_ACCOUNT_TYPE",              "LogTypeSwitchAccountType");


// File types
define("FILE_TYPE_PNG",                             ".png");


/** Date formats
* j - The day of the month without leading zeros (1 to 31)
* l (lowercase 'L') - A full textual representation of a day
* F - A full textual representation of a month (January through December)
* m - A numeric representation of a month (from 01 to 12)
* n - A numeric representation of a month, without leading zeros (1 to 12)
* Y - A four digit representation of a year
* a - Lowercase am or pm
* H - 24-hour format of an hour (00 to 23)
* i - Minutes with leading zeros (00 to 59)
* s - Seconds, with leading zeros (00 to 59)
* h - 12-hour format of an hour (01 to 12)
*/
define("FORMAT_DATE_FULL",                      "l, F j, Y");
define("FORMAT_DATE_SHORT",                     "n/j/Y");
define("FORMAT_DATE_TIME_FULL",                 "l j, F Y H:i:s");
define("FORMAT_DATE_TIME_NUMERICAL",            "m/j/Y h:i:s a");


/**
* Class declaration for autoloaer visibility and
* to get constants value when calling the constant in between quotes
*/
class Constants
{

    /**
    * Class constructor
    */
    function __construct()
    {

    }


    /**
    * Class destructor
    */
    function __destruct()
    {

    }


    /**
    * Function to return constant value within SQL statements
    *
    * @param constant - Constants value
    */
    public function valueOfConst($constant)
    {

        if (!empty($constant)) {
            // Constant not empty

            return $constant; // Return constant

        } else {
            // Constant empty

            // Throw exception
            throw new Exception(
                'Method '.__METHOD__.' failed : The required constant is null or undefined'
            );
        }
    }
}

// EOF: Constants.php
