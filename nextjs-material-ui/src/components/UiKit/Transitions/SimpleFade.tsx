"use client";

import React from "react";
import {
  Card,
  Typography,
  Box,
  Switch,
  Paper,
  Collapse,
  FormControlLabel,
  Fade
} from "@mui/material";  

const icon = (
  <Paper sx={{ m: 1, width: 100, height: 100 }} elevation={4}>
    <svg>
      <Box
        component="polygon"
        points="0,100 50,00, 100,100"
        sx={{
          fill: (theme) => theme.palette.common.white,
          stroke: (theme) => theme.palette.divider,
          strokeWidth: 1,
        }}
      />
    </svg>
  </Paper>
);

const SimpleFade: React.FC = () => {
  const [checked, setChecked] = React.useState(false);

  const handleChange = () => {
    setChecked((prev) => !prev);
  };

  return (
    <>
      <Card
        sx={{
          boxShadow: "none",
          borderRadius: "7px",
          mb: "25px",
          padding: { xs: "18px", sm: "20px", lg: "25px" },
        }}
        className="rmui-card"
      >
        <Typography
          variant="h3"
          sx={{
            fontSize: { xs: "16px", md: "18px" },
            fontWeight: 700,
            mb: "25px",
          }}
          className="text-black"
        >
          Simple Fade
        </Typography>
 
        <Box sx={{ height: 180 }}>
          <FormControlLabel
            control={<Switch checked={checked} onChange={handleChange} />}
            label="Show"
          />
          <Box sx={{ display: 'flex' }}>
            <Fade in={checked}>{icon}</Fade>
          </Box>
        </Box>
      </Card>
    </>
  );
};

export default SimpleFade;