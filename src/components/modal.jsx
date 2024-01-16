// Modal.js
import React from 'react';
import { useNavigate } from 'react-router-dom';
import JavaImage from '../assets/java_img.png';
import CplusImage from '../assets/c++_img.png';
import PythonImage from '../assets/py_img.png';
import JavascriptImage from '../assets/js_img.jpg';
import './Modal.css';

const Modal = ({ showModal, onClose }) => {
  const navigate = useNavigate();

  const handleButtonClick = (imageName) => {
    // Add your logic here for each button click
    console.log(`Button ${imageName} clicked`);

    // Redirect to the corresponding page
    if (imageName === 'Javascript') {
      navigate('/javascript'); 
    }
    else if (imageName === 'Python') {
      navigate('/python'); 
    }
    else if (imageName === 'Java') {
      navigate('/java'); 
    }
    else if (imageName === 'Cplus') {
      navigate('/cplus'); 
    }
    
    // Add more conditions for other buttons as needed
  };

  return (
    <>
      <div className={`modal ${showModal ? 'active' : ''}`}>
        <div className="modal-header">
          <button onClick={onClose} className="close-button">
            &times;
          </button>
        </div>
        <div className="modal-body">
          <div className="button-container">
          <img
              src={PythonImage}
              alt="Python"
              className="image-button"
              onClick={() => handleButtonClick('Python')}
            />
            <img
              src={JavascriptImage}
              alt="Javascript"
              className="image-button"
              onClick={() => handleButtonClick('Javascript')}
            />
            <img
              src={JavaImage}
              alt="Java"
              className="image-button"
              onClick={() => handleButtonClick('Java')}
            />
            <img
              src={CplusImage}
              alt="Cplus"
              className="image-button"
              onClick={() => handleButtonClick('Cplus')}
            />

            {/* Add more image buttons as needed */}
          </div>
        </div>
      </div>
      <div id="overlay" className={showModal ? 'active' : ''}></div>
    </>
  );
};

export default Modal;
