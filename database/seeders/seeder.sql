INSERT INTO `vai_tro` (`TenVT`) VALUES ('admin'), ('user');

INSERT INTO `loai_san_pham` (`TenLSP`, `Mota`, `TrangThai`, `loaisanpham_MaLSP`) VALUES ('Cà Phê', 'Cafe là thức uống phổ biến được yêu thích và lựa chọn nhiều nhất hiện nay. Cafe đen, cafe sữa được pha chế từ các loại hạt cafe nguyên chất trên mảnh đất Robusta, Arabica hay cafe chồn,…thì được coi là cafe truyền thống đậm vị. Tùy vào nhu cầu, sở thích mà thực khách có thể lựa chọn 1 ly cafe pha phin trực tiếp hoặc pha sẵn rồi uống nóng hoặc với đá. Những ai yêu thích cafe nguyên chất thường chọn 1 ly cafe đen không đường, hoặc có thể pha thêm 1 – 2 thìa đường. Còn những ai thích ngọt ngào, thơm béo thì sẽ yêu cầu 1 ly cafe sữa đậm đà, ngọt dịu.', '1', NULL), 
('Trà', 'Là đồ uống phổ biến thứ hai trên thế giới. Nó làm bằng cách ngâm lá, chồi, hay cành của cây chè vào nước sôi từ vài phút đến vài giờ. Lá chè có thể được oxy hóa, sấy rang, phơi, hay pha thêm các loài thảo mộc khác như hoa, gia vị, hay trái cây khác trước khi chế vào nước sôi.', '1', NULL),
('Espresso', 'Là loại cafe rất được ưa chuộng tại Ý và Tây Ban Nha; được pha bằng cách cho nước bị ép dưới áp suất cao chảy qua một lượng cafe được xay cực mịn. Kết quả sẽ cho ra 25 – 30ml thức uống với 1 lớp kem từ dầu cà phê có màu vàng nâu sẫm (người ta gọi đó là crema) dày 5mm trên bề mặt. Một ly Espresso chính hiệu sẽ có vị rất đậm và trên mặt có một lớp crema thơm mà không đắng. \r\nCafe Espresso thường được uống bằng tách dày được làm nóng trước, có thể có hoặc không pha thêm đường và thường được phục vụ kèm theo 1 mẩu bánh quy cùng 1 ly nước.', '1', '1'), 
('Cappuccino', 'Xuất xứ từ Ý, một Cappuccino chuẩn sẽ gồm 3 phần đều nhau, đó là: cafe Espresso được pha với một lượng nước gấp đôi (Espresso Lungo), sữa nóng và sữa sủi bọt. Tiếp đến, rắc thêm lên trên ít bột cacao hay bột quế, rồi dùng khuông, thìa hay tăm que khuấy/vẽ để tạo hình cho sản phẩm của mình, có thể là hình trái tim, hình chiếc lá, đám mây,…vô cùng bắt mắt.', '1', '1');

INSERT INTO `tai_khoan` (`TenTaiKhoan`, `MatKhau`, `DiaChi`, `TrangThai`, `MaVT`) VALUES 
('khuongduy', '123456', 'Long An', '1', '1'), 
('thanhduy', '123456', 'BT', '0', '2'),
('minhvy', '123456', 'Q5', '1', '1'), 
('minhhuy', '123456', 'CC', '1', '1');

INSERT INTO `khuyen_mai` (`TenKM`, `DieuKienKM`, `NgayBD`, `PhanTramKM`, `NgayKT`, `TrangThai`) VALUES 
('Khuyến mãi hè', '500000', '2023-08-31 23:59:59', '10', '2023-09-30 23:59:59', '1'),
('Khuyến mãi đông', '1000000', '2023-09-30 23:59:59', '10', '2023-12-31 23:59:59', '0');

INSERT INTO `van_chuyen` (`TenVC`, `GiaVC`) VALUES 
('Shopee Express', '35000'), 
('Baemin', '10000');

INSERT INTO `san_pham`(`MaTK`, `TenSP`, `SoLuong`, `DonGia`, `HinhAnh`, `TrangThai`, `loaisanpham_MaLSP`, `DanhGia`) VALUES 
('3','Cà phê đen','500','25000','','1','1','4.9'), 
('3','Cà phê sữa','400','29000','','1','1','4.4'),
('1','Cà phê test','700','55000','','1','1','1.3'),
('3','Cà phê đen','500','25000','','1','1','4.9'),
('1','Trà Long Nhãn Hạt Sen', '100', '49000', '', '1', '2', '3.8'),
('3','Trà Đào Cam Sả - Đá', '100', '49000', '', '1', '2', '3.6'),
('3','Trà Đào Cam Sả - Nóng', '100', '59000', '', '1', 2, '4.9'),
('1','Trà Hạt Sen - Đá', '400', '49000', '', '1', 2, '0.2'),
('1','Trà Hạt Sen - Nóng', 150, 59000, '', 1, 2, '5.0'),
('3','Trà Đào Cam Sả Chai Fresh 500ML', 160, 150000, '', 1, 2, '4.6'),
('1','Trà Đen Macchiato', 100, 55000, '', 1, 3, '2.3'),
('3','Hồng Trà Sữa Trân Châu', 130, 55000, '', 1, 3, '2.5'),
('3','Trà Sữa Mắc Ca Trân Châu', 110, 60000, '', 1, 3, '4.9'),
('1','Trà sữa Oolong Nướng Trân Châu', 100, 49000, '', 1, 3, '4.3'),
('1','Hi-Tea Đào Kombucha', 100, 59000, '', 1, 1, '4.4'),
('3','Hi-Tea Yuzu Kombucha', 100, 49000, '', 1, 1, '4.2'),
('3','Cà phê đen','500','25000','','1','1','4.9'), 
('3','Cà phê sữa','400','29000','','1','1','4.4'),
('1','Cà phê test','700','55000','','1','1','1.3'),
('3','Cà phê đen','500','25000','','1','1','4.9'),
('1','Trà Long Nhãn Hạt Sen', '100', '49000', '', '1', '2', '3.8'),
('3','Trà Đào Cam Sả - Đá', '100', '49000', '', '1', '2', '3.6'),
('3','Trà Đào Cam Sả - Nóng', '100', '59000', '', '1', 2, '4.9'),
('1','Trà Hạt Sen - Đá', '400', '49000', '', '1', 2, '0.2'),
('1','Trà Hạt Sen - Nóng', 150, 59000, '', 1, 2, '5.0'),
('3','Trà Đào Cam Sả Chai Fresh 500ML', 160, 150000, '', 1, 2, '4.6'),
('1','Trà Đen Macchiato', 100, 55000, '', 1, 3, '2.3'),
('3','Hồng Trà Sữa Trân Châu', 130, 55000, '', 1, 3, '2.5'),
('3','Trà Sữa Mắc Ca Trân Châu', 110, 60000, '', 1, 3, '4.9'),
('1','Trà sữa Oolong Nướng Trân Châu', 100, 49000, '', 1, 3, '4.3'),
('1','Hi-Tea Đào Kombucha', 100, 59000, '', 1, 1, '4.4'),
('3','Hi-Tea Yuzu Kombucha', 100, 49000, '', 1, 1, '4.2'),
('3','Cà phê đen','500','25000','','1','1','4.9'), 
('3','Cà phê sữa','400','29000','','1','1','4.4'),
('1','Cà phê test','700','55000','','1','1','1.3'),
('3','Cà phê đen','500','25000','','1','1','4.9'),
('1','Trà Long Nhãn Hạt Sen', '100', '49000', '', '1', '2', '3.8'),
('3','Trà Đào Cam Sả - Đá', '100', '49000', '', '1', '2', '3.6'),
('3','Trà Đào Cam Sả - Nóng', '100', '59000', '', '1', 2, '4.9'),
('1','Trà Hạt Sen - Đá', '400', '49000', '', '1', 2, '0.2'),
('1','Trà Hạt Sen - Nóng', 150, 59000, '', 1, 2, '5.0'),
('3','Trà Đào Cam Sả Chai Fresh 500ML', 160, 150000, '', 1, 2, '4.6'),
('1','Trà Đen Macchiato', 100, 55000, '', 1, 3, '2.3'),
('3','Hồng Trà Sữa Trân Châu', 130, 55000, '', 1, 3, '2.5'),
('3','Trà Sữa Mắc Ca Trân Châu', 110, 60000, '', 1, 3, '4.9'),
('1','Trà sữa Oolong Nướng Trân Châu', 100, 49000, '', 1, 3, '4.3'),
('1','Hi-Tea Đào Kombucha', 100, 59000, '', 1, 1, '4.4'),
('3','Hi-Tea Yuzu Kombucha', 100, 49000, '', 1, 1, '4.2'),
('3','Cà phê đen','500','25000','','1','1','4.9'), 
('3','Cà phê sữa','400','29000','','1','1','4.4'),
('1','Cà phê test','700','55000','','1','1','1.3'),
('3','Cà phê đen','500','25000','','1','1','4.9'),
('1','Trà Long Nhãn Hạt Sen', '100', '49000', '', '1', '2', '3.8'),
('3','Trà Đào Cam Sả - Đá', '100', '49000', '', '1', '2', '3.6'),
('3','Trà Đào Cam Sả - Nóng', '100', '59000', '', '1', 2, '4.9'),
('1','Trà Hạt Sen - Đá', '400', '49000', '', '1', 2, '0.2'),
('1','Trà Hạt Sen - Nóng', 150, 59000, '', 1, 2, '5.0'),
('3','Trà Đào Cam Sả Chai Fresh 500ML', 160, 150000, '', 1, 2, '4.6'),
('1','Trà Đen Macchiato', 100, 55000, '', 1, 3, '2.3'),
('3','Hồng Trà Sữa Trân Châu', 130, 55000, '', 1, 3, '2.5'),
('3','Trà Sữa Mắc Ca Trân Châu', 110, 60000, '', 1, 3, '4.9'),
('1','Trà sữa Oolong Nướng Trân Châu', 100, 49000, '', 1, 3, '4.3'),
('1','Hi-Tea Đào Kombucha', 100, 59000, '', 1, 1, '4.4'),
('3','Hi-Tea Yuzu Kombucha', 100, 49000, '', 1, 1, '4.2');

INSERT INTO `hoa_don`(`MaTK`, `NgayLap`, `TongTien`, `MaKM`, `MaVC`, `TrangThai`) VALUES 
('1','2023-08-24','300000','2','1','1'),
('2','2023-08-30','49000','1','2','1'),
('3','2023-09-24','300000', NULL,'1','1'),
('2','2023-09-30','49000',NULL,'2','1'),
('4','2023-10-24','300000','2',NULL,'1'),
('1','2023-10-30','49000','1','2','1'),
('1','2023-11-24','300000','2','1','1'),
('3','2023-11-30','49000','1','2','1');

INSERT INTO `chi_tiet_hoa_don`(`MaHD`, `MaSP`, `DonGia`, `SoLuong`) VALUES 
('1','1','25000','4'),
('1','4','25000','8'),
('2','8','49000','1'),
('3','1','25000','4'),
('3','4','25000','8'),
('4','8','49000','1'),
('5','1','25000','4'),
('5','4','25000','8'),
('6','8','49000','1'),
('7','1','25000','4'),
('7','4','25000','8'),
('8','8','49000','1');

INSERT INTO `danh_gia`(`MaTK`, `MaSP`, `DanhGia`) VALUES 
('1','14','4'),
('2','14','3');

INSERT INTO `gio_hang`(`MaTK`, `MaSP`, `SoLuong`) VALUES 
('1','1','2'),
('2','2','2'),
('3','3','2'),
('4','4','2');

INSERT INTO `option_san_pham`(`MaSP`, `TenOption`, `DonGia`, `SoLuong`) VALUES ('1','Size S','0','200'),
('1','Size M','5000','400'),
('1','Size L','7000','500');
