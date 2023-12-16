CREATE TABLE person (     
    person_id INT PRIMARY KEY AUTO_INCREMENT,     
    first_name VARCHAR(250),     
    last_name VARCHAR(250),     
    user_name VARCHAR(250),     
    passwordd VARCHAR(250),     
    email VARCHAR(250),     
    type ENUM('admin', 'users') NOT NULL,     
    UNIQUE (person_id, type) 
    ) ENGINE=InnoDB; 
CREATE TABLE admins (     
    admin_id INT PRIMARY KEY,     
    phone VARCHAR(250),     
    CIN VARCHAR(250),     
    FOREIGN KEY (admin_id) REFERENCES person (person_id) 
    ) ENGINE=InnoDB;  
    
CREATE TABLE users (     
    user_id INT PRIMARY KEY,     
    FOREIGN KEY (user_id) REFERENCES person (person_id) 
    ) ENGINE=InnoDB;  
    
CREATE TABLE article (     
    article_id INT PRIMARY KEY AUTO_INCREMENT,     
    title VARCHAR(250),     
    contenu VARCHAR(250),     
    date_de_creation DATETIME,     
    person_id INT,     
    FOREIGN KEY (person_id) REFERENCES person (person_id) 
    ) ENGINE=InnoDB;
























