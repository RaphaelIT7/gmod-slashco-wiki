<function name="GetEyeSight" parent="Player" type="classfunc">
	<description>
		Returns the player's networked eyesight level.<br>
		By convention this is set on spawn from the current Slasher's <page>SLASHER#Eyesight</page> field, and drives the local Slasher-vision screen brightness/contrast effect as well as (server-side) the thickness of the fog added around the Slasher.<br>
		This function is created by the <page text="DTVar Networking System">DTVar Networking</page> system.
	</description>
	<realm>Shared</realm>
	<rets>
		<ret name="eyeSight" type="number" default="0">The current value.</ret>
	</rets>
</function>