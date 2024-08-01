USE exam_papers_db;

CREATE TABLE papers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    updated_on DATE,
    university VARCHAR(100),
    exam_type VARCHAR(100),
    year INT,
    month VARCHAR(50),
    course VARCHAR(100),
    subject VARCHAR(100),
    paper VARCHAR(100),
    code VARCHAR(50),
    link VARCHAR(255)
);
DROP TABLE IF EXISTS papers;
CREATE TABLE paper ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    updated_on DATE,
    university VARCHAR(100),
    exam_type VARCHAR(100),
    year INT,
    month VARCHAR(50),
    course VARCHAR(100),
    subject VARCHAR(100),
    paper VARCHAR(100),
    code VARCHAR(50),
    link VARCHAR(255)
);
INSERT INTO papers (updated_on, university, exam_type, year, month, course, subject, paper, code, link)
VALUES ('2024-02-28', 'ABHINASH UNIVERSITY', 'MCET', 2024, 'DECEMBER', 'BTECH', 'DATA SCIENCE', 'PAPER 1', 'SHAIF', '#');
INSERT INTO papers (updated_on, university, exam_type, year, month, course, subject, paper, code, link)
VALUES ('2024-06-24', 'MILLENNIUM', 'NCERT', 2024, 'MARCH', 'MSC', 'COMPUTERS', 'PAPER 3', 'JDDSK', '#');

