@extends('admin.admin_dashboard')
@section('admin')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <style>
         .btn-group-sm > .btn, .btn-sm{ --bs-btn-padding-y: .20rem; --bs-btn-padding-x: .4rem; --bs-btn-font-size: .70rem; }
         .alert { padding: 0 1rem 0 1rem; margin: 0 0.5rem 0 1rem; border-radius: 0; }
         h4{ margin-bottom:0; }
         td p{ margin-bottom:0; }
         .alert.none,
         .alert.low,
         .alert.medium,
         .alert.high,
         .alert.critical { color:#ffffff;}
         .alert.none     { background:#53aa33; border-color: #187a00; }
         .alert.low      { background:#ffcb0d; border-color: #c79b00; }
         .alert.medium   { background:#f9a009; border-color: #c07100; }
         .alert.high     { background:#df3d03; border-color: #a50000; }
         .alert.critical { background:#cc0500; border-color: #930000; }
         .needBaseMetrics      { margin-bottom: 0; }
         .white-text {
            color: white;
            }
      </style>

<div class="page-content">
<div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
<!--
         Copyright (c) 2019, FIRST.ORG, INC.
         All rights reserved.
         
         Redistribution and use in source and binary forms, with or without modification, are permitted provided that the
         following conditions are met:
             1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following
             disclaimer.
             2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the
             following disclaimer in the documentation and/or other materials provided with the distribution.
             3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote
             products derived from this software without specific prior written permission.
         
         THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES,
         INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
         DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
         SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
         SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
         WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
         OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
         -->
         <div id="c1" class="cvss-calculator container mt-3">
         <noscript>
            <div id="scriptWarning">This page requires JavaScript. If you have disabled scripting, please enable it.</div>
         </noscript>
         <div class="p-4 p-md-5 mb-4 text-bg-light bg-info bg-opacity-10 rounded border border-info shadow">
            <div class="col-md-6 px-0">
               <h1 class="display-4 fst-italic ">CVSS 3.1 Calculator</h1>
               <p class="lead mb-0 ">Hover over metric group names, metric names and metric values for a summary of the information in the official CVSS v3.1 Specification Document. </p>
            </div>
         </div>
         <form action="javascript:void(0);">
            <p id="vector">
               <label for="vectorString" class="form-label ">Vector String </label>
               <span class="needBaseMetrics ">- select values for all base metrics to generate a vector</span>
               <input id="vectorString" class="form-control" placeholder="CVSSv3.1 Score e.g. CVSS:3.1/AV:X/AC:X/PR:X/UI:X/S:X/C:X/I:X/A:X/E:X/RL:X/RC:X/CR:X/IR:X/AR:X/MAV:X/MAC:X/MPR:X/MUI:X/MS:X/MC:X/MI:X/MA:X" type="text">
            </p>
            <div class="row g-3">
               <div class="col-sm-6">
                  <div class="card mb-3 text-bg-light shadow">
                     <div class="card-header">
                        <div class="d-flex">
                           <h4 id="baseMetricGroup_Legend" title="The Base Metric group represents the intrinsic  characteristics of a vulnerability that are constant over time and across user environments. Determine the vulnerable component and score Attack Vector, Attack Complexity, Privileges Required and User Interaction relative to this.">Base Score</h4>
                           <div class="text-center fw-bold fs-6">
                              <div class="alert alert-secondary" role="alert">
                                 <p class="needBaseMetrics">Select values for all base metrics to generate score</p>
                                 <span id="baseMetricScore"></span>
                                 <span id="baseSeverity"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card-body table-responsive">
                        <table class="table table-hover table-borderless table-sm ">
                           <tbody>
                              <tr>
                                 <td>
                                    <p id="AV_Heading" title="This metric reflects the context by which vulnerability exploitation is possible. The Base Score increases the more remote (logically, and physically) an attacker can be in order to exploit the vulnerable component.">Attack Vector</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="AV" value="N" id="AV_N" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="AV_N" id="AV_N_Label" title="The vulnerable component is bound to the network stack and the set of possible attackers extends beyond the other options listed, up to and including the entire Internet. Such a vulnerability is often termed 'remotely exploitable' and can be thought of as an attack being exploitable at the protocol level one or more network hops away (e.g., across one or more routers).">Network</label>
                                       <input name="AV" value="A" id="AV_A" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="AV_A" id="AV_A_Label" title="The vulnerable component is bound to the network stack, but the attack is limited at the protocol level to a logically adjacent topology. This can mean an attack must be launched from the same shared physical (e.g., Bluetooth or IEEE 802.11) or logical (e.g., local IP subnet) network, or from within a secure or otherwise limited administrative domain (e.g., MPLS, secure VPN to an administrative network zone).">Adjacent</label>
                                       <input name="AV" value="L" id="AV_L" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="AV_L" id="AV_L_Label" title="The vulnerable component is not bound to the network stack and the attacker's path is via read/write/execute capabilities. Either: the attacker exploits the vulnerability by accessing the target system locally (e.g., keyboard, console), or remotely (e.g., SSH); or the attacker relies on User Interaction by another person to perform actions required to exploit the vulnerability (e.g., tricking a legitimate user into opening a malicious document).">Local</label>
                                       <input name="AV" value="P" id="AV_P" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="AV_P" id="AV_P_Label" title="The attack requires the attacker to physically touch or manipulate the vulnerable component. Physical interaction may be brief or persistent.">Physical</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="AC_Heading" title="This metric describes the conditions beyond the attacker's control that must exist in order to exploit the vulnerability. Such conditions may require the collection of more information about the target or computational exceptions. The assessment of this metric excludes any requirements for user interaction in order to exploit the vulnerability. If a specific configuration is required for an attack to succeed, the Base metrics should be scored assuming the vulnerable component is in that configuration.">Attack Complexity</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="AC" value="L" id="AC_L" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="AC_L" id="AC_L_Label" title="Specialized access conditions or extenuating circumstances do not exist. An attacker can expect repeatable success against the vulnerable component.">Low</label>
                                       <input name="AC" value="H" id="AC_H" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="AC_H" id="AC_H_Label" title="A successful attack depends on conditions beyond the attacker's control. That is, a successful attack cannot be accomplished at will, but requires the attacker to invest in some measurable amount of effort in preparation or execution against the vulnerable component before a successful attack can be expected. For example, a successful attack may require an attacker to: gather knowledge about the environment in which the vulnerable target/component exists; prepare the target environment to improve exploit reliability; or inject themselves into the logical network path between the target and the resource requested by the victim in order to read and/or modify network communications (e.g., a man in the middle attack).">High</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="PR_Heading" title="This metric describes the level of privileges an attacker must possess before successfully exploiting the vulnerability.">Privileges Required</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="PR" value="N" id="PR_N" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="PR_N" id="PR_N_Label" title="The attacker is unauthorized prior to attack, and therefore does not require any access to settings or files to carry out an attack.">None</label>
                                       <input name="PR" value="L" id="PR_L" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="PR_L" id="PR_L_Label" title="The attacker is authorized with (i.e., requires) privileges that provide basic user capabilities that could normally affect only settings and files owned by a user. Alternatively, an attacker with Low privileges may have the ability to cause an impact only to non-sensitive resources.">Low</label>
                                       <input name="PR" value="H" id="PR_H" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="PR_H" id="PR_H_Label" title="The attacker is authorized with (i.e., requires) privileges that provide significant (e.g., administrative) control over the vulnerable component that could affect component-wide settings and files.">High</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="UI_Heading" title="This metric captures the requirement for a user, other than the attacker, to participate in the successful compromise the vulnerable component. This metric determines whether the vulnerability can be exploited solely at the will of the attacker, or whether a separate user (or user-initiated process) must participate in some manner.">User Interaction</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="UI" value="N" id="UI_N" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="UI_N" id="UI_N_Label" title="The vulnerable system can be exploited without any interaction from any user.">None</label>
                                       <input name="UI" value="R" id="UI_R" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="UI_R" id="UI_R_Label" title="Successful exploitation of this vulnerability requires a user to take some action before the vulnerability can be exploited.">Required</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="S_Heading" title="Does a successful attack impact a component other than the vulnerable component? If so, the Base Score increases and the Confidentiality, Integrity and Authentication metrics should be scored relative to the impacted component.">Scope</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="S" value="U" id="S_U" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="S_U" id="S_U_Label" title="An exploited vulnerability can only affect resources managed by the same security authority. In this case, the vulnerable component and the impacted component are either the same, or both are managed by the same security authority.">Unchanged</label>
                                       <input name="S" value="C" id="S_C" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="S_C" id="S_C_Label" title="An exploited vulnerability can affect resources beyond the security scope managed by the security authority of the vulnerable component. In this case, the vulnerable component and the impacted component are different and managed by different security authorities.">Changed</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="C_Heading" title="This metric measures the impact to the confidentiality of the information resources managed by a software component due to a successfully exploited vulnerability. Confidentiality refers to limiting information access and disclosure to only authorized users, as well as preventing access by, or disclosure to, unauthorized ones.">Confidentiality</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="C" value="N" id="C_N" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="C_N" id="C_N_Label" title="There is no loss of confidentiality within the impacted component.">None</label>
                                       <input name="C" value="L" id="C_L" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="C_L" id="C_L_Label" title="There is some loss of confidentiality. Access to some restricted information is obtained, but the attacker does not have control over what information is obtained, or the amount or kind of loss is limited. The information disclosure does not cause a direct, serious loss to the impacted component.">Low</label>
                                       <input name="C" value="H" id="C_H" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="C_H" id="C_H_Label" title="There is total loss of confidentiality, resulting in all resources within the impacted component being divulged to the attacker. Alternatively, access to only some restricted information is obtained, but the disclosed information presents a direct, serious impact.">High</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="I_Heading" title="This metric measures the impact to integrity of a successfully exploited vulnerability. Integrity refers to the trustworthiness and veracity of information.">Integrity</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="I" value="N" id="I_N" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="I_N" id="I_N_Label" title="There is no loss of integrity within the impacted component.">None</label>
                                       <input name="I" value="L" id="I_L" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="I_L" id="I_L_Label" title="Modification of data is possible, but the attacker does not have control over the consequence of a modification, or the amount of modification is limited. The data modification does not have a direct, serious impact on the impacted component.">Low</label>
                                       <input name="I" value="H" id="I_H" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="I_H" id="I_H_Label" title="There is a total loss of integrity, or a complete loss of protection. For example, the attacker is able to modify any/all files protected by the impacted component. Alternatively, only some files can be modified, but malicious modification would present a direct, serious consequence to the impacted component.">High</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="A_Heading" title="This metric measures the impact to the availability of the impacted component resulting from a successfully exploited vulnerability. It refers to the loss of availability of the impacted component itself, such as a networked service (e.g., web, database, email). Since availability refers to the accessibility of information resources, attacks that consume network bandwidth, processor cycles, or disk space all impact the availability of an impacted component.">Availability</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="A" value="N" id="A_N" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="A_N" id="A_N_Label" title="There is no impact to availability within the impacted component.">None</label>
                                       <input name="A" value="L" id="A_L" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="A_L" id="A_L_Label" title="Performance is reduced or there are interruptions in resource availability. Even if repeated exploitation of the vulnerability is possible, the attacker does not have the ability to completely deny service to legitimate users. The resources in the impacted component are either partially available all of the time, or fully available only some of the time, but overall there is no direct, serious consequence to the impacted component.">Low</label>
                                       <input name="A" value="H" id="A_H" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="A_H" id="A_H_Label" title="There is total loss of availability, resulting in the attacker being able to fully deny access to resources in the impacted component; this loss is either sustained (while the attacker continues to deliver the attack) or persistent (the condition persists even after the attack has completed). Alternatively, the attacker has the ability to deny some availability, but the loss of availability presents a direct, serious consequence to the impacted component (e.g., the attacker cannot disrupt existing connections, but can prevent new connections; the attacker can repeatedly exploit a vulnerability that, in each instance of a successful attack, leaks a only small amount of memory, but after repeated exploitation causes a service to become completely unavailable).">High</label>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="card mb-3 text-bg-light shadow">
                     <div class="card-header">
                        <div class="d-flex">
                           <h4 id="environmentalMetricGroup_Legend" title="These metrics enable the analyst to customize the CVSS score depending on the importance of the affected IT asset to a user's organization, measured in terms of complementary/alternative security controls in place, Confidentiality, Integrity, and Availability. The metrics are the modified equivalent of base metrics and are assigned metric values based on the component placement in organization infrastructure.">Environmental Score</h4>
                           <div class="text-center fw-bold fs-6">
                              <div class="alert alert-secondary" role="alert">
                                 <p class="needBaseMetrics">Select values for all base metrics to generate score</p>
                                 <span id="environmentalMetricScore"></span>
                                 <span id="environmentalSeverity"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card-body table-responsive">
                        <table class="table table-hover table-borderless table-sm ">
                           <tbody>
                              <tr>
                                 <td>
                                    <p id="CR_Heading" title="These metrics enable the analyst to customize the CVSS score depending on the importance of the Confidentiality of the affected IT asset to a user's organization, relative to other impacts. This metric modifies the environmental score by reweighting the Modified Confidentiality impact metric versus the other modified impacts.">Confidentiality Requirement</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="CR" value="X" id="CR_X" checked="" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="CR_X" id="CR_X_Label" title="Assigning this value indicates there is insufficient information to choose one of the other values, and has no impact on the overall Environmental Score, i.e., it has the same effect on scoring as assigning Medium.">Not Defined</label>
                                       <input name="CR" value="L" id="CR_L" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="CR_L" id="CR_L_Label" title="Loss of Confidentiality is likely to have only a limited adverse effect on the organization or individuals associated with the organization (e.g., employees, customers).">Low</label>
                                       <input name="CR" value="M" id="CR_M" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="CR_M" id="CR_M_Label" title="Assigning this value to the metric will not influence the score.">Medium</label>
                                       <input name="CR" value="H" id="CR_H" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="CR_H" id="CR_H_Label" title="Loss of Confidentiality is likely to have a catastrophic adverse effect on the organization or individuals associated with the organization (e.g., employees, customers).">High</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="IR_Heading" title="These metrics enable the analyst to customize the CVSS score depending on the importance of the Integrity of the affected IT asset to a user's organization, relative to other impacts. This metric modifies the environmental score by reweighting the Modified Integrity impact metric versus the other modified impacts.">Integrity Requirement</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="IR" value="X" id="IR_X" checked="" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="IR_X" id="IR_X_Label" title="Assigning this value indicates there is insufficient information to choose one of the other values, and has no impact on the overall Environmental Score, i.e., it has the same effect on scoring as assigning Medium.">Not Defined</label>
                                       <input name="IR" value="L" id="IR_L" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="IR_L" id="IR_L_Label" title="Loss of Integrity is likely to have only a limited adverse effect on the organization or individuals associated with the organization (e.g., employees, customers).">Low</label>
                                       <input name="IR" value="M" id="IR_M" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="IR_M" id="IR_M_Label" title="Assigning this value to the metric will not influence the score.">Medium</label>
                                       <input name="IR" value="H" id="IR_H" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="IR_H" id="IR_H_Label" title="Loss of Integrity is likely to have a catastrophic adverse effect on the organization or individuals associated with the organization (e.g., employees, customers).">High</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="AR_Heading" title="These metrics enable the analyst to customize the CVSS score depending on the importance of the Availability of the affected IT asset to a user's organization, relative to other impacts. This metric modifies the environmental score by reweighting the Modified Availability impact metric versus the other modified impacts.">Availability Requirement</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="AR" value="X" id="AR_X" checked="" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="AR_X" id="AR_X_Label" title="Assigning this value indicates there is insufficient information to choose one of the other values, and has no impact on the overall Environmental Score, i.e., it has the same effect on scoring as assigning Medium.">Not Defined</label>
                                       <input name="AR" value="L" id="AR_L" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="AR_L" id="AR_L_Label" title="Loss of Availability is likely to have only a limited adverse effect on the organization or individuals associated with the organization (e.g., employees, customers).">Low</label>
                                       <input name="AR" value="M" id="AR_M" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="AR_M" id="AR_M_Label" title="Assigning this value to the metric will not influence the score.">Medium</label>
                                       <input name="AR" value="H" id="AR_H" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="AR_H" id="AR_H_Label" title="Loss of Availability is likely to have a catastrophic adverse effect on the organization or individuals associated with the organization (e.g., employees, customers).">High</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="MAV_Heading" title="This metric reflects the context by which vulnerability exploitation is possible. The Environmental Score increases the more remote (logically, and physically) an attacker can be in order to exploit the vulnerable component.">Modified Attack Vector</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="MAV" value="X" id="MAV_X" checked="" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MAV_X" id="MAV_X_Label" title="The value assigned to the corresponding Base metric is used.">Not Defined</label>
                                       <input name="MAV" value="N" id="MAV_N" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MAV_N" id="MAV_N_Label" title="The vulnerable component is bound to the network stack and the set of possible attackers extends beyond the other options listed, up to and including the entire Internet. Such a vulnerability is often termed 'remotely exploitable' and can be thought of as an attack being exploitable at the protocol level one or more network hops away.">Network</label>
                                       <input name="MAV" value="A" id="MAV_A" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MAV_A" id="MAV_A_Label" title="The vulnerable component is bound to the network stack, but the attack is limited at the protocol level to a logically adjacent topology. This can mean an attack must be launched from the same shared physical (e.g., Bluetooth or IEEE 802.11) or logical (e.g., local IP subnet) network, or from within a secure or otherwise limited administrative domain (e.g., MPLS, secure VPN).">Adjacent Network</label>
                                       <input name="MAV" value="L" id="MAV_L" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MAV_L" id="MAV_L_Label" title="The vulnerable component is not bound to the network stack and the attacker's path is via read/write/execute capabilities. Either: the attacker exploits the vulnerability by accessing the target system locally (e.g., keyboard, console), or remotely (e.g., SSH); or the attacker relies on User Interaction by another person to perform actions required to exploit the vulnerability (e.g., tricking a legitimate user into opening a malicious document).">Local</label>
                                       <input name="MAV" value="P" id="MAV_P" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MAV_P" id="MAV_P_Label" title="The attack requires the attacker to physically touch or manipulate the vulnerable component. Physical interaction may be brief or persistent.">Physical</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="MAC_Heading" title="This metric describes the conditions beyond the attacker's control that must exist in order to exploit the vulnerability. Such conditions may require the collection of more information about the target or computational exceptions. The assessment of this metric excludes any requirements for user interaction in order to exploit the vulnerability. If a specific configuration is required for an attack to succeed, the Base metrics should be scored assuming the vulnerable component is in that configuration.">Modified Attack Complexity</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="MAC" value="X" id="MAC_X" checked="" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MAC_X" id="MAC_X_Label" title="The value assigned to the corresponding Base metric is used.">Not Defined</label>
                                       <input name="MAC" value="L" id="MAC_L" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MAC_L" id="MAC_L_Label" title="Specialized access conditions or extenuating circumstances do not exist. An attacker can expect repeatable success against the vulnerable component.">Low</label>
                                       <input name="MAC" value="H" id="MAC_H" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MAC_H" id="MAC_H_Label" title="A successful attack depends on conditions beyond the attacker's control. That is, a successful attack cannot be accomplished at will, but requires the attacker to invest in some measurable amount of effort in preparation or execution against the vulnerable component before a successful attack can be expected. For example, a successful attack may require an attacker to: gather knowledge about the environment in which the vulnerable target/component exists; prepare the target environment to improve exploit reliability; or inject themselves into the logical network path between the target and the resource requested by the victim in order to read and/or modify network communications (e.g., a man in the middle attack).">High</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="MPR_Heading" title="This metric describes the level of privileges an attacker must possess before successfully exploiting the vulnerability.">Modified Privileges Required</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="MPR" value="X" id="MPR_X" checked="" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MPR_X" id="MPR_X_Label" title="The value assigned to the corresponding Base metric is used.">Not Defined</label>
                                       <input name="MPR" value="N" id="MPR_N" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MPR_N" id="MPR_N_Label" title="The attacker is unauthorized prior to attack, and therefore does not require any access to settings or files to carry out an attack.">None</label>
                                       <input name="MPR" value="L" id="MPR_L" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MPR_L" id="MPR_L_Label" title="The attacker is authorized with (i.e., requires) privileges that provide basic user capabilities that could normally affect only settings and files owned by a user. Alternatively, an attacker with Low privileges may have the ability to cause an impact only to non-sensitive resources.">Low</label>
                                       <input name="MPR" value="H" id="MPR_H" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MPR_H" id="MPR_H_Label" title="The attacker is authorized with (i.e., requires) privileges that provide significant (e.g., administrative) control over the vulnerable component that could affect component-wide settings and files.">High</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="MUI_Heading" title="This metric captures the requirement for a user, other than the attacker, to participate in the successful compromise the vulnerable component. This metric determines whether the vulnerability can be exploited solely at the will of the attacker, or whether a separate user (or user-initiated process) must participate in some manner.">Modified User Interaction</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="MUI" value="X" id="MUI_X" checked="" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MUI_X" id="MUI_X_Label" title="The value assigned to the corresponding Base metric is used.">Not Defined</label>
                                       <input name="MUI" value="N" id="MUI_N" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MUI_N" id="MUI_N_Label" title="The vulnerable system can be exploited without any interaction from any user.">None</label>
                                       <input name="MUI" value="R" id="MUI_R" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MUI_R" id="MUI_R_Label" title="Successful exploitation of this vulnerability requires a user to take some action before the vulnerability can be exploited.">Required</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="MS_Heading" title="Does a successful attack impact a component other than the vulnerable component? If so, the Base Score increases and the Confidentiality, Integrity and Authentication metrics should be scored relative to the impacted component.">Modified Scope</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="MS" value="X" id="MS_X" checked="" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MS_X" id="MS_X_Label" title="The value assigned to the corresponding Base metric is used.">Not Defined</label>
                                       <input name="MS" value="U" id="MS_U" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MS_U" id="MS_U_Label" title="An exploited vulnerability can only affect resources managed by the same security authority. In this case, the vulnerable component and the impacted component are either the same, or both are managed by the same security authority.">Unchanged</label>
                                       <input name="MS" value="C" id="MS_C" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MS_C" id="MS_C_Label" title="An exploited vulnerability can affect resources beyond the security scope managed by the security authority of the vulnerable component. In this case, the vulnerable component and the impacted component are different and managed by different security authorities.">Changed</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="MC_Heading" title="This metric measures the impact to the confidentiality of the information resources managed by a software component due to a successfully exploited vulnerability. Confidentiality refers to limiting information access and disclosure to only authorized users, as well as preventing access by, or disclosure to, unauthorized ones.">Modified Confidentiality</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="MC" value="X" id="MC_X" checked="" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MC_X" id="MC_X_Label" title="The value assigned to the corresponding Base metric is used.">Not Defined</label>
                                       <input name="MC" value="N" id="MC_N" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MC_N" id="MC_N_Label" title="There is no loss of confidentiality within the impacted component.">None</label>
                                       <input name="MC" value="L" id="MC_L" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MC_L" id="MC_L_Label" title="There is some loss of confidentiality. Access to some restricted information is obtained, but the attacker does not have control over what information is obtained, or the amount or kind of loss is limited. The information disclosure does not cause a direct, serious loss to the impacted component.">Low</label>
                                       <input name="MC" value="H" id="MC_H" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MC_H" id="MC_H_Label" title="There is total loss of confidentiality, resulting in all resources within the impacted component being divulged to the attacker. Alternatively, access to only some restricted information is obtained, but the disclosed information presents a direct, serious impact.">High</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="MI_Heading" title="This metric measures the impact to integrity of a successfully exploited vulnerability. Integrity refers to the trustworthiness and veracity of information.">Modified Integrity</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="MI" value="X" id="MI_X" checked="" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MI_X" id="MI_X_Label" title="The value assigned to the corresponding Base metric is used.">Not Defined</label>
                                       <input name="MI" value="N" id="MI_N" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MI_N" id="MI_N_Label" title="There is no loss of integrity within the impacted component.">None</label>
                                       <input name="MI" value="L" id="MI_L" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MI_L" id="MI_L_Label" title="Modification of data is possible, but the attacker does not have control over the consequence of a modification, or the amount of modification is limited. The data modification does not have a direct, serious impact on the impacted component.">Low</label>
                                       <input name="MI" value="H" id="MI_H" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MI_H" id="MI_H_Label" title="There is a total loss of integrity, or a complete loss of protection. For example, the attacker is able to modify any/all files protected by the impacted component. Alternatively, only some files can be modified, but malicious modification would present a direct, serious consequence to the impacted component.">High</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p id="MA_Heading" title="This metric measures the impact to the availability of the impacted component resulting from a successfully exploited vulnerability. It refers to the loss of availability of the impacted component itself, such as a networked service (e.g., web, database, email). Since availability refers to the accessibility of information resources, attacks that consume network bandwidth, processor cycles, or disk space all impact the availability of an impacted component.">Modified Availability</p>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm shadow">
                                       <input name="MA" value="X" id="MA_X" checked="" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MA_X" id="MA_X_Label" title="The value assigned to the corresponding Base metric is used.">Not Defined</label>
                                       <input name="MA" value="N" id="MA_N" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MA_N" id="MA_N_Label" title="There is no impact to availability within the impacted component.">None</label>
                                       <input name="MA" value="L" id="MA_L" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MA_L" id="MA_L_Label" title="Performance is reduced or there are interruptions in resource availability. Even if repeated exploitation of the vulnerability is possible, the attacker does not have the ability to completely deny service to legitimate users. The resources in the impacted component are either partially available all of the time, or fully available only some of the time, but overall there is no direct, serious consequence to the impacted component.">Low</label>
                                       <input name="MA" value="H" id="MA_H" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="MA_H" id="MA_H_Label" title="There is total loss of availability, resulting in the attacker being able to fully deny access to resources in the impacted component; this loss is either sustained (while the attacker continues to deliver the attack) or persistent (the condition persists even after the attack has completed). Alternatively, the attacker has the ability to deny some availability, but the loss of availability presents a direct, serious consequence to the impacted component (e.g., the attacker cannot disrupt existing connections, but can prevent new connections; the attacker can repeatedly exploit a vulnerability that, in each instance of a successful attack, leaks a only small amount of memory, but after repeated exploitation causes a service to become completely unavailable).">High</label>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card mb-3 text-bg-light shadow">
               <div class="card-header">
                  <div class="d-flex">
                     <h4 id="temporalMetricGroup_Legend" title="The Temporal metrics measure the current state of exploit techniques or code availability, the existence of any patches or workarounds, or the confidence that one has in the description of a vulnerability.">Temporal Score</h4>
                     <div class="text-center fw-bold fs-6">
                        <div class="alert alert-secondary" role="alert">
                           <p class="needBaseMetrics">Select values for all base metrics to generate score</p>
                           <span id="temporalMetricScore"></span>
                           <span id="temporalSeverity"></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-body table-responsive">
                  <table class="table table-hover table-borderless table-sm ">
                     <tbody>
                        <tr>
                           <td>
                              <p id="E_Heading" title="This metric measures the likelihood of the vulnerability being attacked, and is typically based on the current state of exploit techniques, exploit code availability, or active, 'in-the-wild' exploitation.">Exploit Code Maturity</p>
                           </td>
                           <td>
                              <div class="btn-group btn-group-sm shadow">
                                 <input name="E" value="X" id="E_X" checked="" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="E_X" id="E_X_Label" title="Assigning this value indicates there is insufficient information to choose one of the other values, and has no impact on the overall Temporal Score, i.e., it has the same effect on scoring as assigning High.">Not Defined</label>
                                 <input name="E" value="U" id="E_U" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="E_U" id="E_U_Label" title="No exploit code is available, or an exploit is theoretical.">Unproven</label>
                                 <input name="E" value="P" id="E_P" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="E_P" id="E_P_Label" title="Proof-of-concept exploit code is available, or an attack demonstration is not practical for most systems. The code or technique is not functional in all situations and may require substantial modification by a skilled attacker.">Proof-of-Concept</label>
                                 <input name="E" value="F" id="E_F" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="E_F" id="E_F_Label" title="Functional exploit code is available. The code works in most situations where the vulnerability exists.">Functional</label>
                                 <input name="E" value="H" id="E_H" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="E_H" id="E_H_Label" title="Functional autonomous code exists, or no exploit is required (manual trigger) and details are widely available. Exploit code works in every situation, or is actively being delivered via an autonomous agent (such as a worm or virus). Network-connected systems are likely to encounter scanning or exploitation attempts. Exploit development has reached the level of reliable, widely-available, easy-to-use automated tools.">High</label>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p id="RL_Heading" title="The Remediation Level of a vulnerability is an important factor for prioritization. The typical vulnerability is unpatched when initially published. Workarounds or hotfixes may offer interim remediation until an official patch or upgrade is issued. Each of these respective stages adjusts the temporal score downwards, reflecting the decreasing urgency as remediation becomes final.">Remediation Level</p>
                           </td>
                           <td>
                              <div class="btn-group btn-group-sm shadow">
                                 <input name="RL" value="X" id="RL_X" checked="" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="RL_X" id="RL_X_Label" title="Assigning this value indicates there is insufficient information to choose one of the other values, and has no impact on the overall Temporal Score, i.e., it has the same effect on scoring as assigning Unavailable.">Not Defined</label>
                                 <input name="RL" value="O" id="RL_O" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="RL_O" id="RL_O_Label" title="A complete vendor solution is available. Either the vendor has issued an official patch, or an upgrade is available.">Official Fix</label>
                                 <input name="RL" value="T" id="RL_T" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="RL_T" id="RL_T_Label" title="There is an official but temporary fix available. This includes instances where the vendor issues a temporary hotfix, tool, or workaround.">Temporary Fix</label>
                                 <input name="RL" value="W" id="RL_W" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="RL_W" id="RL_W_Label" title="There is an unofficial, non-vendor solution available. In some cases, users of the affected technology will create a patch of their own or provide steps to work around or otherwise mitigate the vulnerability.">Workaround</label>
                                 <input name="RL" value="U" id="RL_U" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="RL_U" id="RL_U_Label" title="There is either no solution available or it is impossible to apply.">Unavailable</label>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p id="RC_Heading" title="This metric measures the degree of confidence in the existence of the vulnerability and the credibility of the known technical details. Sometimes only the existence of vulnerabilities are publicized, but without specific details. For example, an impact may be recognized as undesirable, but the root cause may not be known. The vulnerability may later be corroborated by research which suggests where the vulnerability may lie, though the research may not be certain. Finally, a vulnerability may be confirmed through acknowledgement by the author or vendor of the affected technology. The urgency of a vulnerability is higher when a vulnerability is known to exist with certainty. This metric also suggests the level of technical knowledge available to would-be attackers.">Report Confidence</p>
                           </td>
                           <td>
                              <div class="btn-group btn-group-sm shadow">
                                 <input name="RC" value="X" id="RC_X" checked="" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="RC_X" id="RC_X_Label" title="Assigning this value indicates there is insufficient information to choose one of the other values, and has no impact on the overall Temporal Score, i.e., it has the same effect on scoring as assigning Confirmed.">Not Defined</label>
                                 <input name="RC" value="U" id="RC_U" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="RC_U" id="RC_U_Label" title="There are reports of impacts that indicate a vulnerability is present. The reports indicate that the cause of the vulnerability is unknown, or reports may differ on the cause or impacts of the vulnerability. Reporters are uncertain of the true nature of the vulnerability, and there is little confidence in the validity of the reports or whether a static Base score can be applied given the differences described. An example is a bug report which notes that an intermittent but non-reproducible crash occurs, with evidence of memory corruption suggesting that denial of service, or possible more serious impacts, may result.">Unknown</label>
                                 <input name="RC" value="R" id="RC_R" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="RC_R" id="RC_R_Label" title="Significant details are published, but researchers either do not have full confidence in the root cause, or do not have access to source code to fully confirm all of the interactions that may lead to the result. Reasonable confidence exists, however, that the bug is reproducible and at least one impact is able to be verified (Proof-of-concept exploits may provide this). An example is a detailed write-up of research into a vulnerability with an explanation (possibly obfuscated or 'left as an exercise to the reader') that gives assurances on how to reproduce the results.">Reasonable</label>
                                 <input name="RC" value="C" id="RC_C" type="radio" class="btn-check"><label class="btn btn-outline-dark" for="RC_C" id="RC_C_Label" title="Detailed reports exist, or functional reproduction is possible (functional exploits may provide this). Source code is available to independently verify the assertions of the research, or the author or vendor of the affected code has confirmed the presence of the vulnerability.">Confirmed</label>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </form>
         <div class="p-4 mb-3 bg-info bg-opacity-10 rounded border border-info shadow ">
            <h4 class="fst-italic ">About</h4>
            <p>Common Vulnerability Scoring System (CVSS) is a free and open standard. It is owned and managed by <a href="https://www.first.org/">FIRST.org</a>. Based on the metric values you enter, the CVSS calculator applies the formula specified in the <a href="https://www.first.org/cvss/v3-1/cvss-v31-specification_r1.pdf">CVSS version 3.1 standard</a> to produce scores. </p>
         </div>
      </div>
      <hr>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
      <script src="https://www.first.org/cvss/calculator/cvsscalc31.js"></script>
      <script src="https://www.first.org/cvss/calculator/cvsscalc31_helptext.js"></script>
      <!-- <script src="https://www.first.org/_/cvsscalculator31.js"></script> -->
      <script src="{{ asset(  'backend/assets/js/code/cvsscalculator31.js' ) }}"></script>
    
</div>
</div></div></div>




@endsection