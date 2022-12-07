# form-with-authentication
## Task 1: বুটস্ট্রাপ, html, Css দিয়ে form বানানো
# Steps:
1. Form টি varsity Admission candidate দের তথ্য সংগ্রহের উদ্দেশ্যে বানানো, যেখানে ২০+ input field রয়েছে।
2. Form টি Jquery custom validation apply করা হয়েছে; যেমন minimum input field, valid email address, valid Bangladeshi Contact number, specific extension এর image file    upload, Valid GPA input, valid passing year etc।
3. Using raw Php, Back End এর সাথে connect করা, এবং CRUD operation execute করা ।
4. Applied Step js, that will present the form step by step.
5. User authentication applied, have to access the form by registration and login process.
6. While inserting password into database, it will be encrypted and while receiving the password from database during login, it will be decrypted.


# Problem Faced:
1. Manually Database এ সকল তথ্য upload দিয়ে retrieve করা গেলেও,  BLOB type file( image)  retrieve করা যাচ্ছিল না।  ( solved)
2. Image file অর্থাৎ BLOB type file, database এ stored হচ্ছিল না।  (solved)
3. Validation on রেখে submit করলে backend এ data stored হচ্ছিল না (solved)
4. Update page এ Update click করলে কিছু error দেখাচ্ছিল,  কিন্তু data show page এ গেলে দেখা যাচ্ছিল, data updated, also Header:Location কাজ করছিল না (solved)
5. Update করতে গিয়ে  text/number type data retrieved হচ্ছিল ফর্ম এ কিন্তু,  selected option type data গুলো placeholder এ display করতে পারছিল না (Unsolved) 
6. Delete Button এ ক্লিক করলে  Delete page এ targeted data ID receive হচ্ছে কিন্তু delete হচ্ছে না ( Solved)
7. Step Js এ Page wise validation আটকাচ্ছিলো না (Solved)
8. Login  করার সময় inputted password and database এর encrypted password match করতে পারছিল না। (Solved) 
