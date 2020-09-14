const {DataTypes} = require("sequelize")
module.exports = (sequelize, Sequelize) => {
    const Task_Question = sequelize.define("task_question", {
      task_question_id:{
        type: DataTypes.UUID,
        primaryKey: true,
        defaultValue: Sequelize.UUIDV4,
        unique:true
      },
      question: {
        type: Sequelize.STRING(255),
        allowNull: false
      },
      index: {
        type: Sequelize.INTEGER,
        allowNull:false
      },
      required_inputs: {
        type: Sequelize.STRING(64)
      },
      task_id: {
        type: DataTypes.UUID,
        allowNull: false,
        references: {         // Product belongsTo Merchant 1:1
          model: 'tasks',
          key: 'task_id'
        }  
      }
    });
    return Task_Question;
  };