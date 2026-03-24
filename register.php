<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Регистрация — EventHub</title>
    <!-- Защитный скрипт (как на главной) -->
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=QRUDAboppnhShbKESXmeoiwI_qffivy2gSWk1l-uPpNzIaIFbf4o9dVJKwaj3tqmJY2QWQIuC1Xt_JIqd76-0SoiGUuaTdh3GBXDUY4iE47g6AM4OJO85xuBNHoUxINNgfIpwAN_zP3yLsMfAayoOsd9mEf-a0CgilZb2t4WISdEjVDEnUuZ1X7w812RbMdkzY2ELKqk3E6juK9LLe4Wb2WWwptO33BPmhMm2kz-wzXU72gW-3xz07Nj0199yu5kge1-cosRWSYSdSrmn65uDS0NQnj7SwDoaYG5ya-FpfKcgTH8_TyLfWxe0WPIWfT0m1QgNjmJFg-gQi7_KLhXvSNAQBO6QEiUltvn7InHi_ys29QEY_6RqXR7hTYsBAnZaeUY_QBW70njgc5c-px2nnExCS_A4qs2kY2Fcw2SPCEoDDrmxHrCfEcy4Gfxm3DILqBomjjdf8ed51qseqZgTJNIV6V_-FNEqAT_5rwrITkDpJFhtsvVTWrBwmL_Em4xe755nKxjY-OejFEllJg0vd46UgZF9LMsxMANhtLeZ12JAs0zkWh6Yu0rYLXLru3kVNb0YY6uGJ09GeqYr9O_zPkg9jEjfXhri5F2frfMGGukQkxh1uAQIWsJiiqd9iheifhKt0L246L7ku9cRa1Y4vsFV2P6CuPhpWK0Vjw76vvHjXAPNik84bkXlZAwl3QveQiErqO9-OyufFfGv_hLjIZom9Mup_TTBA8EIIysvIbe5oIoGyn5OD6FSkLrEAeSxhs1LDqIigBALkuxhiYl1L1XZUQIcuTmNkduLgrO6mISv5zQOGPKzG3HqPRdtW3_uSQfM5Dn7b8rZFy3G6KWxYRfgX5lJHYeo-ilLzdaIKEIYvPc1Y6VSeGFr7ifAu7n5siGJBrWmicSBXcGvc_zbitLedzGigkcLNwK20hGKs53N3b-RtyXaRQVYGAqu4SGuwk2kYeuHhrwhVB8n1O97WVv3ubuRP7cZVhNRevxghyGjt7WkROv2g9k-2iZl1lxKDl0k2UPauCeRoQPyq-D7v_CCxpE021v_g0tR8_Jhu5QrrDr58Chuppbv0tsTEytQUbAv_sBLXi1N7r6Rwr1_VIkN6GFEfFjVyr1lOQf-H_8LVgD5wuwcVLUAAHKMqjBrKeNwaOfd7o73kMoyepSUYIHAwzkr79QdrGWxofy2r-hfNQpE_pDxp50YkfzDwbrSQ8PqqXGeb_MDoyMQGcrtQfiV7jb4EtxlK1EOxFmtS5tL3Aqf-56VtAvjuFjG20QWHfgJrk6MEzpzk30Pr9bQNTp11Uc-5C6qYRspILWVBujjEWU1cW0-1gQIOrS94bNRi1TrGCUtQrA9j_rvsg8bTx9CyUMO1CCqOWI7kVUj1CVmfre_QGf8M2qeExbJ0GFeH6y0rHbPORE7kN7jPYIB2RTRqkjpjksVGC64ASHjZzZQfY3akztC9b9z6IBPEbEWUByqGjlYtqiqQ76TLVxJ70OiCs9v9i2er_OrHcVG8zHUCAO43PEj4Wu2wgtot0hPnrZMXZgmz_dvG3ut2NRBoaJqPXeQ_BwJ9cy6D0gI-xr0bXTkpGQFvyHIwkuNmMCoGzFfGJHLnRiPqMcM_9py915ylQ79KkNPQLpNPN0fCf1XEgOm5vVpqA3LsHraxqGXgGEgnNo-AHBuSVlWUW2iVB7PzQF-K8IyzlLnQoiRfjQfRYjlhh9qNnduLQi7DtJhyg1pJKmFaOBHm0oFtMJsbee9-yDkBCMkRKGvOf_zt0" nonce="6750a35c16cbcc56f09e6aa9fe092f1e" charset="UTF-8"></script>
    <style>
        /* ========== БАЗОВЫЕ СТИЛИ (как на главной) ========== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
            line-height: 1.4;
            min-height: 100vh;
            background: linear-gradient(90deg, #DFE4FF 0%, #9FBFFF 50%, #DFE4FF 100%);
            overflow-x: hidden;
            text-align: center;
        }
        .bg-circle {
            position: fixed;
            border-radius: 50%;
            border: 26px solid rgba(21, 25, 255, 0.2);
            background: transparent;
            pointer-events: none;
            z-index: 1;
        }

        .circle-1 { width: 280px; height: 280px; top: -80px; left: -100px; }
        .circle-2 { width: 420px; height: 420px; top: 15%; right: -180px; }
        .circle-3 { width: 350px; height: 350px; bottom: 25%; left: -5px; }
        .circle-4 { width: 380px; height: 380px; bottom: -100px; right: -150px; }

        @media (max-width: 768px) {
            .circle-1 { width: 180px; height: 180px; top: -40px; left: -70px; }
            .circle-2 { width: 250px; height: 250px; top: 10%; right: -100px; }
            .circle-3 { width: 220px; height: 220px; bottom: 30%; left: -80px; }
            .circle-4 { width: 240px; height: 240px; bottom: -50px; right: -90px; }
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            padding: 0 24px;
        }

        .header {
            background-color: #9FBFFF;
            padding: 16px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(90deg, #0022CD, #A100FF);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            letter-spacing: -0.02em;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 32px;
            flex-wrap: wrap;
        }

        .nav-links a {
            text-decoration: none;
            font-weight: 500;
            color: #1A1F2E;
            transition: 0.2s;
            font-size: 1rem;
        }

        .nav-links a:hover {
            color: #0022CD;
        }

        .profile-link {
            background: #F40BA6;
            padding: 10px 24px;
            border-radius: 40px;
            color: white !important;
            font-weight: 600;
            transition: 0.2s;
            opacity: 0.7;
        }

        .profile-link:hover {
            background: #d6098f;
            transform: scale(0.98);
            opacity: 1;
        }

        .main-content {
            padding: 32px 0 48px;
        }

        .welcome-oval {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(90deg, #0022CD, #A100FF);
            padding: 8px 28px;
            border-radius: 40px;
            margin-bottom: 28px;
        }

        .welcome-text {
            font-size: 0.9rem;
            font-weight: 500;
            color: #9CC8FF;
            letter-spacing: 0.3px;
        }

        .gradient-text {
            background: linear-gradient(90deg, #0022CD, #A100FF);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .footer {
            background-color: #9FBFFF;
            padding: 48px 24px 32px;
            text-align: center;
            margin-top: 40px;
        }

        .footer-logo {
            font-size: 2.2rem;
            font-weight: 800;
            background: linear-gradient(90deg, #0022CD, #A100FF);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            display: inline-block;
            margin-bottom: 16px;
        }

        .footer-tagline {
            font-size: 1rem;
            color: #1A1F2E;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .footer-copyright {
            font-size: 0.75rem;
            color: #3A3F5E;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            padding-top: 24px;
            margin-top: 16px;
        }

        /* ========== ДОПОЛНИТЕЛЬНЫЕ СТИЛИ ДЛЯ ФОРМЫ РЕГИСТРАЦИИ ========== */
        .registration-card {
            background: rgba(255, 255, 255, 0.96);
            border-radius: 48px;
            padding: 40px 36px;
            margin: 24px auto;
            max-width: 780px;
            box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(2px);
            text-align: left;
            transition: all 0.2s;
        }

        .registration-card h2 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 28px;
            background: linear-gradient(90deg, #0022CD, #A100FF);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            text-align: center;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            color: #1E2A3A;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 14px 18px;
            font-size: 1rem;
            font-family: inherit;
            background: #F4F7FC;
            border: 1px solid #CBD5E1;
            border-radius: 32px;
            transition: 0.2s;
            outline: none;
            color: #0F172A;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #5B4BD6;
            box-shadow: 0 0 0 3px rgba(91, 75, 214, 0.2);
            background: white;
        }

        .dynamic-fields {
            background: #F8FAFF;
            border-radius: 32px;
            padding: 24px 28px;
            margin: 20px 0 24px;
            border-left: 5px solid #5B4BD6;
        }

        .dynamic-fields h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: #0022CD;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .btn-submit {
            background: linear-gradient(90deg, #0022CD, #A100FF);
            border: none;
            padding: 14px 32px;
            border-radius: 60px;
            font-weight: 700;
            font-size: 1rem;
            color: white;
            cursor: pointer;
            transition: 0.2s;
            width: 100%;
            font-family: inherit;
            margin-top: 16px;
            box-shadow: 0 4px 10px rgba(0, 34, 205, 0.3);
        }

        .btn-submit:hover {
            transform: scale(0.98);
            background: linear-gradient(90deg, #001ba5, #8f00e0);
            box-shadow: 0 6px 14px rgba(0, 34, 205, 0.4);
        }

        .login-hint {
            text-align: center;
            margin-top: 20px;
            font-size: 0.85rem;
            color: #334155;
        }

        .login-hint a {
            color: #5B4BD6;
            font-weight: 600;
            text-decoration: none;
            border-bottom: 1px dashed #5B4BD6;
        }

        .login-hint a:hover {
            color: #0022CD;
        }

        @media (max-width: 760px) {
            .container {
                padding: 0 16px;
            }
            .header {
                padding: 12px 20px;
                flex-direction: column;
                text-align: center;
            }
            .nav-links {
                justify-content: center;
                gap: 20px;
            }
            .registration-card {
                padding: 28px 20px;
                margin: 16px 0;
            }
            .dynamic-fields {
                padding: 20px 16px;
            }
        }
    </style>
</head>
<body>
    <!-- Декоративные круги как на главной -->
    <div class="bg-circle circle-1"></div>
    <div class="bg-circle circle-2"></div>
    <div class="bg-circle circle-3"></div>
    <div class="bg-circle circle-4"></div>

    <header class="header">
        <a href="#" class="logo">EventHub</a>
        <div class="nav-links">
            <a href="Top1.html">Топ участников</a>
            <a href="#">Мероприятия</a>
            <a href="#">Организаторы</a>
            <a href="#" class="profile-link">Личный кабинет</a>
        </div>
    </header>

    <div class="container">
        <div class="main-content">
            <!-- Приветственный овал в стиле главной -->
            <div class="welcome-oval">
                <span class="welcome-text"> ✨ Стань частью сообщества</span>
            </div>
            <h1 class="main-headline" style="font-size: 2.4rem; margin-bottom: 20px;">
                Создай аккаунт в <span class="gradient-text">EventHub</span>
            </h1>
            <p style="color: #1E2A3A; max-width: 580px; margin: 0 auto 20px auto; font-weight: 500;">
                Участвуй в мероприятиях, получай баллы и попади в кадровый резерв
            </p>

            <!-- Карточка регистрации с формой -->
            <div class="registration-card">
                <h2>Регистрация</h2>
                <form action="" method="POST">
                    <!-- Базовые поля: email, пароль, роль -->
                    <div class="form-group">
                        <label>📧 Электронная почта</label>
                        <input type="email" name="register_email" required placeholder="example@eventhub.ru">
                    </div>

                    <div class="form-group">
                        <label>🔒 Пароль</label>
                        <input type="password" name="register_pass" required placeholder="Минимум 6 символов">
                    </div>

                    <div class="form-group">
                        <label>👥 Роль в системе</label>
                        <select name="register_role" required>
                            <option value="">Выберите роль</option>
                            <option value="1">Пользователь (участник)</option>
                            <option value="2">Организатор мероприятий</option>
                            <option value="3">Кадровая служба</option>
                        </select>
                    </div>

                    <!-- Динамические блоки, которые показываются в зависимости от роли -->
                    <div id="userFields" class="dynamic-fields" style="display:none;">
                        <h3>📋 Личные данные участника</h3>
                        <div class="form-group">
                            <label>Фамилия</label>
                            <input type="text" name="user_lastname" placeholder="Иванов">
                        </div>
                        <div class="form-group">
                            <label>Имя</label>
                            <input type="text" name="user_name" placeholder="Иван">
                        </div>
                        <div class="form-group">
                            <label>Отчество</label>
                            <input type="text" name="iser_midname" placeholder="Иванович">
                        </div>
                        <div class="form-group">
                            <label>Дата рождения</label>
                            <input type="date" name="user_bdate">
                        </div>
                        <div class="form-group">
                            <label>Город</label>
                            <input type="text" name="user_city" placeholder="Москва">
                        </div>
                    </div>

                    <div id="promoterFields" class="dynamic-fields" style="display:none;">
                        <h3>🏢 Данные организатора</h3>
                        <div class="form-group">
                            <label>Имя организации / организатора</label>
                            <input type="text" name="promoter_name" placeholder="Название компании / ФИО">
                        </div>
                        <div class="form-group">
                            <label>Город</label>
                            <input type="text" name="promoter_city" placeholder="Санкт-Петербург">
                        </div>
                        <div class="form-group">
                            <label>Тип организатора</label>
                            <select name="promoter_type">
                                <option value="">Выберите тип</option>
                                <option value="1">Образовательная организация</option>
                                <option value="2">Бизнес-партнер</option>
                            </select>
                        </div>
                    </div>

                    <div id="coordinatorFields" class="dynamic-fields" style="display:none;">
                        <h3>🏛️ Данные кадровой службы</h3>
                        <div class="form-group">
                            <label>Фамилия</label>
                            <input type="text" name="talent_coordinator_lastname" placeholder="Петрова">
                        </div>
                        <div class="form-group">
                            <label>Имя</label>
                            <input type="text" name="talent_coordinator_name" placeholder="Анна">
                        </div>
                        <div class="form-group">
                            <label>Отчество</label>
                            <input type="text" name="talent_coordinator_midname" placeholder="Сергеевна">
                        </div>
                        <div class="form-group">
                            <label>Организация</label>
                            <input type="text" name="talent_coordinator_org" placeholder="Название компании / учреждения">
                        </div>
                        <div class="form-group">
                            <label>Тип координатора</label>
                            <select name="talent_coordinator_type">
                                <option value="">Выберите тип</option>
                                <option value="1">Государственная структура</option>
                                <option value="2">Корпоративный партнер</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">🌟 Зарегистрироваться</button>
                    <div class="login-hint">
                        Уже есть аккаунт? <a href="#">Войти в личный кабинет</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-logo">EventHub</div>
        <div class="footer-tagline">Молодежная платформа развития потенциала и новых знакомств</div>
        <div class="footer-copyright">© 2026 EventHub. Вдохновляем, развиваем, помогаем расти</div>
    </footer>

    <!-- Скрипт переключения полей (функционал полностью сохранён и улучшен) -->
    <script>
        (function() {
            const roleSelect = document.querySelector('select[name="register_role"]');
            const userFields = document.getElementById('userFields');
            const promoterFields = document.getElementById('promoterFields');
            const coordinatorFields = document.getElementById('coordinatorFields');

            // Вспомогательная функция для очистки required у всех полей, кроме базовых
            function resetRequiredFields() {
                const allInputs = document.querySelectorAll('#userFields input, #userFields select, #promoterFields input, #promoterFields select, #coordinatorFields input, #coordinatorFields select');
                allInputs.forEach(input => {
                    input.removeAttribute('required');
                });
            }

            function setRequiredForRole(role) {
                resetRequiredFields();
                if (role === '1') {
                    const userLastName = document.querySelector('input[name="user_lastname"]');
                    const userName = document.querySelector('input[name="user_name"]');
                    const userBdate = document.querySelector('input[name="user_bdate"]');
                    const userCity = document.querySelector('input[name="user_city"]');
                    if (userLastName) userLastName.setAttribute('required', 'required');
                    if (userName) userName.setAttribute('required', 'required');
                    if (userBdate) userBdate.setAttribute('required', 'required');
                    if (userCity) userCity.setAttribute('required', 'required');
                } 
                else if (role === '2') {
                    const promoterName = document.querySelector('input[name="promoter_name"]');
                    const promoterCity = document.querySelector('input[name="promoter_city"]');
                    const promoterType = document.querySelector('select[name="promoter_type"]');
                    if (promoterName) promoterName.setAttribute('required', 'required');
                    if (promoterCity) promoterCity.setAttribute('required', 'required');
                    if (promoterType) promoterType.setAttribute('required', 'required');
                } 
                else if (role === '3') {
                    const coordLastname = document.querySelector('input[name="talent_coordinator_lastname"]');
                    const coordName = document.querySelector('input[name="talent_coordinator_name"]');
                    const coordOrg = document.querySelector('input[name="talent_coordinator_org"]');
                    const coordType = document.querySelector('select[name="talent_coordinator_type"]');
                    if (coordLastname) coordLastname.setAttribute('required', 'required');
                    if (coordName) coordName.setAttribute('required', 'required');
                    if (coordOrg) coordOrg.setAttribute('required', 'required');
                    if (coordType) coordType.setAttribute('required', 'required');
                }
            }

            function toggleFields() {
                // Скрываем все блоки
                if (userFields) userFields.style.display = 'none';
                if (promoterFields) promoterFields.style.display = 'none';
                if (coordinatorFields) coordinatorFields.style.display = 'none';

                const role = roleSelect.value;
                if (role === '1') {
                    if (userFields) userFields.style.display = 'block';
                    setRequiredForRole('1');
                } else if (role === '2') {
                    if (promoterFields) promoterFields.style.display = 'block';
                    setRequiredForRole('2');
                } else if (role === '3') {
                    if (coordinatorFields) coordinatorFields.style.display = 'block';
                    setRequiredForRole('3');
                } else {
                    resetRequiredFields();
                }
            }

            if (roleSelect) {
                roleSelect.addEventListener('change', toggleFields);
                // При загрузке проверим, если уже выбрано значение
                if (roleSelect.value) {
                    toggleFields();
                } else {
                    // изначально ничего не показываем, required только на базовых
                    resetRequiredFields();
                }
            }
        })();
    </script>
</body>
</html>