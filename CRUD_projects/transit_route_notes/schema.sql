CREATE TABLE routes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  route_number VARCHAR(20),
  route_name VARCHAR(100),
  operator VARCHAR(50)
);

CREATE TABLE notes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  route_id INT,
  note_text TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (route_id) REFERENCES (routes_id)
);
