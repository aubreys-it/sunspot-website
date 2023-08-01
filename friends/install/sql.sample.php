-- SAMPLE DATA <?php die('Move along...'); ?>

INSERT INTO :::fields::: (`field_id`, `field_active`, `field_ordering`, `field_name`, `field_prompt`, `field_normally`, `field_array`, `field_required`, `field_type`) VALUES 
(2, 'on', 1, 'Age', 'Your Age', '', 'a:0:{}', 'off', 'number'),
(3, 'on', 0, 'Name', 'Your Name', '', 'a:0:{}', 'on', 'text'),
(4, 'on', 2, 'Volunteer', 'Want to volunteer?', 'off', 'a:0:{}', 'off', 'checkbox'),
(10, 'off', 5, 'Last Purchase', 'Field Prompt', '00/00/0000', 'a:0:{}', 'off', 'date'),
(8, 'on', 3, 'Animal', 'Favorite Animal', '', 'a:10:{i:0;s:4:"Dogs";i:1;s:4:"Cats";i:2;s:7:"Parrots";i:3;s:9:"Aardvarks";i:4;s:6:"Lemurs";i:5;s:6:"Snails";i:6;s:6:"Snakes";i:7;s:5:"Bears";i:8;s:8:"Manatees";i:9;s:7:"Shrimps";}', 'off', 'multiple'),
(9, 'off', 4, 'Purchases', 'Field Prompt', '0', 'a:0:{}', 'off', 'number');

INSERT INTO :::group_rules::: (`rule_id`, `group_id`, `field_id`, `logic`, `value`) VALUES 
(1, 1, 4, 'true', NULL),
(2, 2, 2, 'greater', '20'),
(4, 3, 8, 'is', 'Manatees'),
(5, 3, 8, 'is', 'Shrimps'),
(11, 4, 9, 'greater', '5'),
(10, 5, 0, 'is_in', '6'),
(9, 5, 3, 'is', 'Brice'),
(13, 6, 0, 'not_in', '3');

INSERT INTO :::groups::: (`group_id`, `group_name`) VALUES 
(1, 'Volunteers'),
(4, 'Good Customers'),
(3, 'Sea Lovers'),
(5, 'Me or Land Lubbers'),
(6, 'Land Lubbers');

INSERT INTO :::subscriber_data::: (`data_id`, `field_id`, `subscriber_id`, `value`) VALUES 
(1, 3, 1, 'Brice'),
(2, 4, 1, 'on'),
(3, 8, 1, 'Shrimps'),
(4, 10, 1, '943938000'),
(5, 3, 2, 'Agnes Turnbull'),
(6, 2, 2, '77'),
(7, 8, 2, 'Dogs'),
(8, 9, 2, '3'),
(9, 10, 2, '1166158800'),
(10, 3, 3, 'Mary Zinnecker'),
(11, 2, 3, '33'),
(12, 8, 3, 'Cats'),
(13, 9, 3, '7'),
(14, 10, 3, '1162702800'),
(15, 3, 4, 'Mattie Athan'),
(16, 2, 4, '46'),
(17, 4, 4, 'on'),
(18, 8, 4, 'Parrots'),
(19, 9, 4, '2'),
(20, 10, 4, '1160193600'),
(21, 3, 5, 'ZoltÃ¡n SzabÃ³'),
(22, 2, 5, '40'),
(23, 8, 5, 'Aardvarks'),
(24, 3, 6, 'Adam Hartstone-Rose'),
(25, 2, 6, '24'),
(26, 4, 6, 'on'),
(27, 8, 6, 'Lemurs'),
(28, 3, 7, 'Tony Northrup'),
(29, 2, 7, '28'),
(30, 8, 7, 'Snails'),
(31, 9, 7, '1'),
(32, 10, 7, '1163221200'),
(33, 3, 8, 'Ali Khan'),
(34, 2, 8, '48'),
(35, 8, 8, 'Snakes'),
(36, 9, 8, '6'),
(37, 10, 8, '1165813200'),
(38, 3, 9, 'Timothy Treadwell'),
(39, 2, 9, '33'),
(40, 4, 9, 'on'),
(41, 8, 9, 'Bears'),
(42, 3, 10, 'Capt. Ahab'),
(43, 2, 10, '244'),
(44, 8, 10, 'Manatees'),
(45, 3, 11, 'Capt. Cook'),
(46, 2, 11, '170'),
(47, 4, 11, 'on'),
(48, 8, 11, 'Shrimps'),
(49, 9, 11, '15'),
(50, 10, 11, '1292130000'),
(53, 2, 1, '26');


INSERT INTO :::subscribers::: (`subscriber_id`, `email`, `time_touched`, `time_registered`, `flag`, `ip`, `status`) VALUES 
(1, 'brice@pommo.org', '2006-12-15 09:34:35', '2006-12-15 09:12:30', 0, 2130706433, 1),
(2, 'angnes@pommo.org', '2006-12-15 09:15:45', '2006-12-15 09:15:45', 0, 2130706433, 1),
(3, 'mary@pommo.org', '2006-12-15 09:16:44', '2006-12-15 09:16:44', 0, 2130706433, 1),
(4, 'mattie@parrots.pc', '2006-12-15 09:18:22', '2006-12-15 09:18:22', 0, 2130706433, 1),
(5, 'zoltan@aardvarks.rus', '2006-12-15 09:19:57', '2006-12-15 09:19:57', 0, 2130706433, 1),
(6, 'adams@lemurs.4.life', '2006-12-15 09:34:10', '2006-12-15 09:21:31', 0, 2130706433, 1),
(7, 'tony@snails.4.life', '2006-12-15 09:23:59', '2006-12-15 09:23:59', 0, 2130706433, 1),
(8, 'khan@pommo.org', '2006-12-15 09:25:16', '2006-12-15 09:25:16', 0, 2130706433, 1),
(9, 'timothy@ak.us', '2006-12-15 09:27:41', '2006-12-15 09:27:41', 0, 2130706433, 1),
(10, 'manatee_meat@make.me.rich', '2006-12-15 09:31:13', '2006-12-15 09:31:13', 0, 2130706433, 1),
(11, 'capt@pommo.org', '2006-12-15 09:32:57', '2006-12-15 09:32:57', 0, 2130706433, 1);