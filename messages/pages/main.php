<?php
$contact_with_me_keyboard = include __DIR__ . '/../../keyboards/contact_with_me_keyboard.php';

if ($text == '/help') {
    $t->sendMessage($chatID, "AgroMarzak botiga yordam kerakmi? Sizga qanday yordam berishimiz mumkin? Iltimos, savollaringizni yoki muammolaringizni bizga bildiring, va biz sizga yordam berishga harakat qilamiz!");
}

if ($text == 'Profilim') {
    $t->sendMessage($chatID, '🚧 Ushbu bo‘lim hozircha ishlab chiqilish jarayonida.

Biz xizmat sifatini yuqori darajada ta’minlash uchun ushbu funksiya ustida faol ishlayapmiz. Tez orada ishga tushiriladi va yangiliklar haqida sizga albatta xabar beramiz.

Sabr va tushunishingiz uchun rahmat 🤝
');
} else if ($text == 'AI Agronom') {
    $page->Set($chatID, 'ai_agronom');
    $keyb = include __DIR__ . '/../../keyboards/back.php';
    $t->sendMessage($chatID, '🌿 AgroMarkaz AI Botiga xizmatiga xush kelibsiz!

Endi siz sun’iy intellekt asosida Agro savollaringizga javob olishingiz mumkin. Ekinlar, kasalliklar, parvarish va hosildorlik bo‘yicha istalgan savolingizni yozing — AI sizga aniq va foydali javob berishga harakat qiladi.

💬 Savolingizni yozing va boshlang!
', $keyb);
} else if ($text == "Biz bilan bog'lanish") {
    $t->sendMessage($chatID, "📞 Biz bilan bog‘lanish:

💼 Moliya va hujjatlar: *Bekhruz Karimov*
🛡 Security, UI/UX & Frontend: *Khayrullayevich Oyatullokh*
⚙️ Backend & Database: *Karayev Umedjon*

Savollaringiz bo‘lsa, tegishli mutaxassisga murojaat qilishingiz mumkin.
", $contact_with_me_keyboard, parse_mode: "markdown");
} else if ($text == 'Kirish') {
    $t->sendMessage($chatID, "🚧 Ushbu bo‘lim hozircha ishlab chiqilish jarayonida.

Biz xizmat sifatini yuqori darajada ta’minlash uchun ushbu funksiya ustida faol ishlayapmiz. Tez orada ishga tushiriladi va yangiliklar haqida sizga albatta xabar beramiz.

Sabr va tushunishingiz uchun rahmat 🤝
");
} else if ($text == "Ro'yxatdan o'tish") {
    $t->sendMessage($chatID, "🚧 Ushbu bo‘lim hozircha ishlab chiqilish jarayonida.

Biz xizmat sifatini yuqori darajada ta’minlash uchun ushbu funksiya ustida faol ishlayapmiz. Tez orada ishga tushiriladi va yangiliklar haqida sizga albatta xabar beramiz.

Sabr va tushunishingiz uchun rahmat 🤝
");
} else if ($text == "Agranom bilan bog'lanish") {
    $t->sendMessage($chatID, "🚧 Ushbu bo‘lim hozircha ishlab chiqilish jarayonida.

Biz xizmat sifatini yuqori darajada ta’minlash uchun ushbu funksiya ustida faol ishlayapmiz. Tez orada ishga tushiriladi va yangiliklar haqida sizga albatta xabar beramiz.

Sabr va tushunishingiz uchun rahmat 🤝
");
}