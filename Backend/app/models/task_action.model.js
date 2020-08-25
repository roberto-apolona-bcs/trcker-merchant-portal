const {DataTypes} = require("sequelize")
module.exports = (sequelize, Sequelize) => {
    const Task_Action = sequelize.define("task_action", {
      task_action_id:{
        type: DataTypes.UUID,
        primaryKey: true,
        defaultValue: Sequelize.UUIDV4,
        unique:true
      },
      task_action_name: {
        type: Sequelize.STRING(255),
        allowNull: false
      },
      task_action_description: {
        type: Sequelize.STRING(255)
      },
      subject_level: {
        type: Sequelize.STRING(64)
      },
      data_type: {
        type: Sequelize.STRING(64)
      },
      data_source: {
        type: Sequelize.STRING(64)
      },
      merchant_id: {
        type: DataTypes.UUID,
        allowNull: true,
        references: {         // Product belongsTo Merchant 1:1
          model: 'merchants',
          key: 'merchant_id'
        }  
      },
      task_action_classification_id: {
        type: DataTypes.UUID,
        allowNull: false,
        references: {         // Product belongsTo Merchant 1:1
          model: 'task_action_classifications',
          key: 'task_action_classification_id'
        }  
      }
    });
    return Task_Action;
  };