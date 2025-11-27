<?php  

// SELECT * FROM orders WHERE user_id = 10;


// SELECT * FROM orders WHERE user_id = 10;

// SElECT * FROM users WHERE  id = 10;







//INNER JOIN : MATLAB 2 TABLE KO MILLA OR SAME RECORD JO MATCH HN JAIN US KO SHOW KRNA JASAY FOREIGH KEY KO USE KYA HNVA HIAN
// SELECT users.username , orders.Product
// FROM users
// INNER JOIN orders ON users_id = orders.user_id;

//LEFT JOIN :
// => MATLAB  UAY BHI 2 TABLE KO JOIN KRTA HAIN LAKEN LEFT WALY AGR MATCH NA HN TU WO BHI SHOW KRTA HIAN AS A NULL
// SELECT users.username , orders.Product
// FROM users
// LEFT JOIN orders 
// ON users.id = orders.order_id;


//RIGHT JOIN :
// => MATLAB  UAY BHI 2 TABLE KO JOIN KRTA HAIN LAKEN RIGHT WALY AGR MATCH NA HN TU WO BHI SHOW KRTA HIAN AS A NULL

// SELECT users.username , orders.Product
// FROM users
// RIGHT JOIN orders 
// ON users.id = orders.order_id;




?>