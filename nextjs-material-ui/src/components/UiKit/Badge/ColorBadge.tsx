"use client";

import React from "react";
import {
  Card,
  Typography,
  Badge,
  Box
} from "@mui/material";
import MailIcon from '@mui/icons-material/Mail';

const ColorBadge: React.FC = () => {
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
          Color Badge
        </Typography>
 
        <Box
          sx={{
            display: 'flex',
            alignItems: 'center',
            gap: '10px'
          }}
        >
          <Badge badgeContent={4} color="primary">
            <MailIcon color="action" sx={{ fontSize: '25px' }} />
          </Badge>
          <Badge badgeContent={4} color="success">
            <MailIcon color="action" sx={{ fontSize: '25px' }} />
          </Badge>
        </Box>
      </Card>
    </>
  );
};

export default ColorBadge;