class Steps {
  constructor(wizard) {
    this.wizard = wizard;
    this.steps = this.getSteps();
    this.stepsQuantity = this.getStepsQuantity();
    this.currentStep = 0;
  }

  setCurrentStep(currentStep) {
    this.currentStep = currentStep;
  }

  getSteps() {
    return this.wizard.getElementsByClassName("step");
  }

  getStepsQuantity() {
    return this.getSteps().length;
  }

  handleConcludeStep() {
    this.steps[this.currentStep].classList.add("-completed");
  }

  handleStepsClasses(movement) {
    if (movement > 0)
      this.steps[this.currentStep - 1].classList.add("-completed"); else
      if (movement < 0)
        this.steps[this.currentStep].classList.remove("-completed");
  }
}


class Panels {
  constructor(wizard) {
    this.wizard = wizard;
    this.panelWidth = this.wizard.offsetWidth;
    this.panelsContainer = this.getPanelsContainer();
    this.panels = this.getPanels();
    this.currentStep = 0;

    this.updatePanelsPosition(this.currentStep);
    this.updatePanelsContainerHeight();
  }

  getCurrentPanelHeight() {
    // return `${this.getPanels()[this.currentStep].offsetHeight}px`;
    return '60em';
  }

  getPanelsContainer() {
    return this.wizard.querySelector(".panels");
  }

  getPanels() {
    return this.wizard.getElementsByClassName("panel");
  }

  updatePanelsContainerHeight() {
    this.panelsContainer.style.minheight = this.getCurrentPanelHeight();
  }

  updatePanelsPosition(currentStep) {
    const panels = this.panels;
    const panelWidth = this.panelWidth;

    for (let i = 0; i < panels.length; i++) {
      panels[i].classList.remove(
        "movingIn",
        "movingOutBackward",
        "movingOutFoward");


      if (i !== currentStep) {
        if (i < currentStep) panels[i].classList.add("movingOutBackward"); else
          if (i > currentStep) panels[i].classList.add("movingOutFoward");
      } else {
        panels[i].classList.add("movingIn");
      }
    }

    this.updatePanelsContainerHeight();
  }

  setCurrentStep(currentStep) {
    this.currentStep = currentStep;
    this.updatePanelsPosition(currentStep);
  }
}

var $validator1;
var $validator2;

$(document).ready(function () {
  jQuery.validator.addMethod("optdate", function (value, element) {
    var startDate = new Date("1970-01-01");
    var endDate = new Date("2009-12-31");
    var d = new Date(value);
    return (d.getTime() <= endDate.getTime() && d.getTime() >= startDate.getTime())
  }, "Masukkan tahun yang sah."
  );
  jQuery.validator.addMethod("emailstudent", function (value, element) {
    return this.optional(element) || /^.+@student.umn.ac.id$/.test(value);
  }, "Masukkan email student."
  );
  jQuery.validator.addMethod("classy", function (value, element) {
    return (value >= 2010 && value <= 2021)
  }, "Masukkan tahun yang sah."
  );
  $validator1 = $('.panels form').validate({
    rules: {
      fullname: {
        required: true
      },
      nim: {
        required: true,
        maxlength: 11,
        minlength: 11
      },
      classyear: {
        required: true,
        maxlength: 4,
        minlength: 4
      },
      place_of_birth: {
        required: true
      },
      birthdate: {
        required: true,
        optdate: true
      },
      instagram: {
        required: true,
        maxlength: 30
      },
      line: {
        required: true,
        maxlength: 30
      },
      phonenumber: {
        required: true,
        maxlength: 20,
        minlength: 13
      },
      email: {
        required: true
      },
      photo: {
        required: true,
        accept: "image/*",
        extension: "jpg|jpeg|png"
      },
      experience: {
        required: true,
        maxlength: 300
      },
      about: {
        required: true,
        maxlength: 500
      },
      why: {
        required: true,
        maxlength: 500
      },
      division: {
        required: true,
        maxlength: 500
      },
      visualQ1: {
        required: true,
        maxlength: 500
      },
      visualQ2: {
        required: true,
        maxlength: 500
      },
      prQ1: {
        required: true,
        maxlength: 500
      },
      bacaritaQ1: {
        required: true,
        maxlength: 500
      },
      bacaritaQ2: {
        required: true,
        maxlength: 500
      },
      likuQ1: {
        required: true,
        maxlength: 500
      },
      likuQ2: {
        required: true,
        maxlength: 500
      },
      antaQ1: {
        required: true,
        maxlength: 500
      },
      antaQ2: {
        required: true,
        maxlength: 500
      },
      gantarQ1: {
        required: true,
        maxlength: 500
      },
      gantarQ2: {
        required: true,
        maxlength: 500
      },
      artoQ1: {
        required: true,
        maxlength: 500
      },
      artoQ2: {
        required: true,
        maxlength: 500
      },
      luaQ1: {
        required: true,
        maxlength: 500
      },
      luaQ2: {
        required: true,
        maxlength: 500
      },
      lawangQ1: {
        required: true,
        maxlength: 500
      },
      lawangQ2: {
        required: true,
        maxlength: 500
      },
      ortaQ1: {
        required: true,
        maxlength: 500
      },
      ortaQ2: {
        required: true,
        maxlength: 500
      },
      hiddencheck: {
        required: true
      },
      hiddencheck2: {
        required: true
      },
      hiddencheck3: {
        required: true
      }
    },
    messages: {
      fullname: {
        required: "Pengisian kolom ini diperlukan."
      },
      nim: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Masukan NIM dengan benar.",
        minlength: "Masukan NIM dengan benar."
      },
      classyear: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Masukan Angkatan dengan benar.",
        minlength: "Masukan Angkatan dengan benar."
      },
      place_of_birth: {
        required: "Pengisian kolom ini diperlukan."
      },
      birthdate: {
        required: "Pengisian kolom ini diperlukan."
      },
      instagram: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Masukan username Instagram dengan benar."
      },
      line: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Masukan ID Line dengan benar."
      },
      phonenumber: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Masukan nomor telepon dengan benar.",
        minlength: "Masukan nomor telepon dengan benar."
      },
      email: {
        required: "Pengisian kolom ini diperlukan."
      },
      photo: {
        required: "Pengisian kolom ini diperlukan.",
        accept: "Masukan file foto yang benar.",
        extension: "Masukan file foto dengan format yang benar (jpg, jpeg, dan png)."
      },
      experience: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maksimal pengisian 300 huruf."
      },
      about: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      why: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      division: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      visualQ1: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      visualQ2: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      prQ1: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      bacaritaQ1: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      bacaritaQ2: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      likuQ1: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      likuQ2: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      antaQ1: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      antaQ2: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      gantarQ1: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      gantarQ2: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      artoQ1: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      artoQ2: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      luaQ1: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      luaQ2: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      lawangQ1: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      lawangQ2: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      ortaQ1: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      ortaQ2: {
        required: "Pengisian kolom ini diperlukan.",
        maxlength: "Maskimal pengisian 500 huruf"
      },
      hiddencheck: {
        required: "Harap membaca ketentuan yang ada"
      },
      hiddencheck2: {
        required: "Harap membaca ketentuan yang ada"
      },
      hiddencheck3: {
        required: "Harap membaca ketentuan yang ada"
      }
    }
  });
});

class Wizard {
  constructor(obj) {
    this.wizard = obj;
    this.panels = new Panels(this.wizard);
    this.steps = new Steps(this.wizard);
    this.stepsQuantity = this.steps.getStepsQuantity();
    this.currentStep = this.steps.currentStep;


    this.concludeControlMoveStepMethod = this.steps.handleConcludeStep.bind(this.steps);
    this.wizardConclusionMethod = this.handleWizardConclusion.bind(this);
  }

  updateButtonsStatus() {
    if (this.currentStep === 0)
      this.previousControl.classList.add("disabled");
    else
      this.previousControl.classList.remove("disabled");
  }

  updtadeCurrentStep(movement) {
    this.currentStep += movement;
    this.steps.setCurrentStep(this.currentStep);
    this.panels.setCurrentStep(this.currentStep);

    this.handleNextStepButton();
    this.updateButtonsStatus();
  }

  handleNextStepButton() {
    if (this.currentStep === this.stepsQuantity - 1) {
      // this.nextControl.innerHTML = "Conclude!";
      this.nextControl.classList.add('hide');
      this.finControl.classList.remove('hide');

      this.finControl.addEventListener("click", this.nextControlMoveStepMethod);
      this.nextControl.removeEventListener("click", this.nextControlMoveStepMethod);
      // this.nextControl.addEventListener("click",this.concludeControlMoveStepMethod);
      // this.nextControl.addEventListener("click", this.wizardConclusionMethod);
    } else {
      this.nextControl.classList.remove('hide');
      this.finControl.classList.add('hide');

      this.nextControl.addEventListener("click", this.nextControlMoveStepMethod);
      this.finControl.removeEventListener("click", this.nextControlMoveStepMethod);

    }
  }

  handleWizardConclusion() {
    this.wizard.classList.add("completed");
  }

  addControls(previousControl, nextControl, finControl) {
    this.previousControl = previousControl;
    this.nextControl = nextControl;
    this.finControl = finControl;
    this.previousControlMoveStepMethod = this.moveStep.bind(this, -1);
    this.nextControlMoveStepMethod = this.moveStep.bind(this, 1);
    this.finControlMoveStepMethod = this.moveStep.bind(this, 1);

    previousControl.addEventListener("click", this.previousControlMoveStepMethod);
    nextControl.addEventListener("click", this.nextControlMoveStepMethod);
    finControl.addEventListener("click", this.finControlMoveStepMethod);

    this.updateButtonsStatus();
  }

  // clickvalidate(){
  //   var $valid = $('.panels form').valid();
  //   if(!valid){
  //     $validator.focusInvalid();
  //     return this.moveStep.bind(this,0);
  //   }else{
  //     return this.moveStep.bind(this, 1);
  //   }
  // }

  moveStep(movement) {
    if (this.validateMovement(movement)) {
      this.updtadeCurrentStep(movement);
      this.steps.handleStepsClasses(movement);
    } else {
      throw "This was an invalid movement";
    }
  }

  validateMovement(movement) {
    const fowardMov = movement > 0 && this.currentStep < this.stepsQuantity - 1;
    const backMov = movement < 0 && this.currentStep > 0;

    // let email = document.getElementById('email').value
    // let pquestion1 = document.getElementById('pquestion1').value

    if (fowardMov) {
      // console.log($validator1);
      //validate page 1
      if (this.currentStep == 0) {
        var $valid1 = $('.panels form').valid();
        if ((!$valid1)) {
          $validator1.focusInvalid();
          return false;
        }
      }
      // validate page 2
      if (this.currentStep == 1) {
        var $valid2 = $('.panels form').valid();
        if (!$valid2) {
          $validator1.focusInvalid();
          return false;
        }
      }
      if (this.currentStep == 2) {
        var $valid3 = $('.panels form').valid();
        if (!$valid3) {
          $validator1.focusInvalid();
          return false;
        }
      }
    }

    return fowardMov || backMov;
  }
}

let wizardElement = document.getElementById("wizard");
let wizard = new Wizard(wizardElement);
let buttonNext = document.querySelector(".next");
let buttonPrevious = document.querySelector(".previous");
let buttonFin = document.querySelector(".fin");

wizard.addControls(buttonPrevious, buttonNext, buttonFin);
