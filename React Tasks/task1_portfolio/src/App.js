import 'bootstrap/dist/css/bootstrap.min.css';
import './Style/style.css';

import Header from './components/Header';
import HeroSection from './components/HeroSection';
import About from './components/About';
import Education from './components/Education';
import Experiences from './components/Experiences';
import Skills from './components/Skills';
import Certificates from './components/Certificates';
import Contact from './components/Contact';


function App() {
  return (
    <div className="App">
      <Header />
      <HeroSection />
      <About />
      <Education />
      <Experiences />
      <Skills />
      <Certificates />
      <Contact />
    </div>
  );
}

export default App;
