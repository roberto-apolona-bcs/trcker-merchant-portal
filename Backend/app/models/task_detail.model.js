const {DataTypes} = require("sequelize")
module.exports = (sequelize, Sequelize) => {
    const Task_Detail = sequelize.define("task_detail", {
      task_detail_id:{
        type: DataTypes.UUID,
        primaryKey: true,
        defaultValue: Sequelize.UUIDV4,
        unique:true
      },
      response: {
        type: Sequelize.STRING,
        allowNull: false
      },
      task_ticket_id: {
        type:DataTypes.UUID,
        allowNull:false,
        references: {
          model:"task_tickets",
          key:"task_ticket_id"
        }
      }
    });
    return Task_Detail;
  };