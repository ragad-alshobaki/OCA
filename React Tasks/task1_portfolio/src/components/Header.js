import logo from '../images/RGDlogo.png';

export default function Header() {
    return(
        <header>
            <nav>
                <nav className="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
                    <img className="logo" src={logo} alt="RGD sign_logo" />
                    <div className="navList">
                        <a href="#home" class="navp">Home</a>
                        <a href="#about" class="navp">About</a>
                        <a href="#education" class="navp">Education</a>
                        <a href="#experiances" class="navp">Experiances</a>
                        <a href="#skills" class="navp">Skills</a>
                        <a href="#cert" class="navp">Certificates</a>
                        {/* <a href="#refs" class="navp">Reference</a> */}
                        <a href="#contact" class="navp">Contact</a>
                    </div>
                </nav>
            </nav>
        </header>
    );
}