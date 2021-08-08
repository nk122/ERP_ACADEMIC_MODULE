# TEST PLAN:

## Table no: High level test plan

| **Test ID** | **Description**                                              | **Exp I/P** | **Exp O/P** | **Actual Out** |**Type Of Test**  |    
|-------------|--------------------------------------------------------------|------------|-------------|----------------|------------------|
|  H_01       |As a unregistered user,  I want to  go to main site to login  ,so that I will get valid account.|  New user inputs credentails |Account created|Account created|Requirement based |
|  H_02       |As a registered user, I want to apply for admission,so that I can become a student of institute.|  Student enrolls to new courses | Courses added to his profile| Courses added |Requirement based   |
|  H_03       |As a student, I want to change my branch so that I can study what I like.|  Request for change |Admin can grant the request| Admin can grant the request|Scanario based    |

## Table no: Low level test plan

| **Test ID** | **Description**                                              | **Exp IN** | **Exp OUT** | **Actual Out** |**Type Of Test**  |    
|-------------|--------------------------------------------------------------|------------|-------------|----------------|------------------|
|  L_01       | Test for unauthorized entry| Checked for wrong passwords |Restricted entry|Restricted entry|Requirement based |
|  L_02       |Test the session expire time of roles| After 30 min from login  |User should be logged out| Sometimes Failing |Requirement based  |
|  L_03       |Test for unauthorized access to data.| Checked with wrong passwords |Restricted entry|Restricted entry |Requirement based    |
