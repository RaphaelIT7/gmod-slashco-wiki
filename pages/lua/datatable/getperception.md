<function name="GetPerception" parent="Player" type="classfunc">
	<description>
		Returns the player's networked perception level.<br>
		By convention this is set on spawn from the current Slasher's <page>Slasher#Perception</page> field, and increases how long <page>Player:SlasherStunDeafen</page> stuns them for, and (for the locally controlled Slasher) how far away Survivor footsteps are detected.<br>
		This function is created by the <page text="DTVar Networking System">DTVar Networking</page> system.
	</description>
	<realm>Shared</realm>
	<rets>
		<ret name="perception" type="number" default="0">The current value.</ret>
	</rets>
</function>