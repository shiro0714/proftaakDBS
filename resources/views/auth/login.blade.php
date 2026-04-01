<div class="login-container">
    <div class="login-card">
        <form action="{{ route('login.post') }}" method="POST">
            @extends('layouts.app')
            @csrf
            <h1>Inloggen</h1>
            <p>Welkom bij het Bezoekerssysteem</p>
            
            <div class="form-group">
                <label>E-mailadres</label>
                <input type="email" name="email" placeholder="receptionist@bedrijf.nl" required>
            </div>

            <div class="form-group">
                <label>Wachtwoord</label>
                <input type="password" name="password" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn-login">Inloggen</button>
        </form>
    </div>
</div>