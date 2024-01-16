// App.js
import React, { useState } from 'react';
import { BrowserRouter as Router, Route, Routes, Link } from 'react-router-dom'; // Import Route, Routes, and Link
import Modal from './components/modal';
import C from './components/C';
import Python from './components/Python';
import Java from './components/Java';
import Cplus from './components/Cplus';

function App() {
  const [showModal, setShowModal] = useState(false);

  const openModal = () => {
    setShowModal(true);
  };

  const closeModal = () => {
    setShowModal(false);
  };

  return (
    <Router>
      <Link to="/">Home</Link>
      <Routes>
        <Route
          path="/python"
          element={
            <div>
              <Python />
              {/* You can add a link back to the home page if needed */}
              <Link to="/">Go back to Home</Link>
            </div>
          }
        />
        <Route
          path="/java"
          element={
            <div>
              <Java />
              {/* You can add a link back to the home page if needed */}
              <Link to="/">Go back to Home</Link>
            </div>
          }
        />
                <Route
          path="/c"
          element={
            <div>
              <C/>
              {/* You can add a link back to the home page if needed */}
              <Link to="/">Go back to Home</Link>
            </div>
          }
        />
                <Route
          path="/cplus"
          element={
            <div>
              <Cplus />
              {/* You can add a link back to the home page if needed */}
              <Link to="/">Go back to Home</Link>
            </div>
          }
        />
        <Route
          path="/"
          element={
            <div>
              <button onClick={openModal}>Open Modal</button>
              <Modal showModal={showModal} onClose={closeModal} />
            </div>
          }
        />
      </Routes>
    </Router>
  );
}

export default App;
